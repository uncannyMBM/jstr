<?php

namespace JsonStringfy\JsonStringfy\Activereq\Activemod;

use App\Http\Controllers\Controller;
use Facades\JsonStringfy\JsonStringfy\Activewor\{
    RR, BS, IN, DH
};
use Illuminate\Http\Request;
use JsonStringfy\JsonStringfy\Activesol\Activetalk\TM;

class PC extends Controller
{
    use TM;

    public function index()
    {
        $pid = BS::getPid();
        return view('pdoc::IN', compact('pid'));
    }

    public function checkRequirements()
    {
        $checkExtensions = IN::checkRequirements();
        return view('pdoc::CR', compact('checkExtensions'));
    }

    public function checkPermissions()
    {
        $checkExtensions = IN::checkRequirements();
        if (!in_array(0, $checkExtensions)) {
            $chekPermissions = IN::checkPermissions();
            return view('pdoc::CP', compact('chekPermissions'));
        }
        return redirect()->route('installer');
    }

    public function productCode()
    {
        $chekPermissions = IN::checkPermissions();
        if (isset($chekPermissions['grantPermission']) && $chekPermissions['grantPermission'] == 1) {
            return view('pdoc::PV');
        }
        return redirect()->route('installer');
    }

    public function submitProductCode(Request $request)
    {
        $this->validate($request, [
            'p_c' => 'required|min:5',
            'em' => 'required|email|max:150',
            'd_h' => 'required|min:5',
            'd_p' => 'required|min:2',
            'd_n' => 'required|min:1',
            'd_u' => 'required|min:1',
            'd_ps' => 'nullable|min:5'
        ], [
            '*.required' => 'This field is required.',
            '*.min' => 'This field must be at least :min characters.',
            '*.max' => 'This field can be maximum :max characters.',
            '*.email' => 'This field must be an valid email address.',
        ]);

        $data['purchased_code'] = $request->p_c;
        $data['email'] = $request->em;
        $getData = json_decode(IN::getToken($data));
        if (!isset($getData) || isset($getData->error)) {
            return back()->with('error', $getData->error ?? 'Something went wrong. Please contact with your author.')->withInput();
        } elseif (isset($getData->success) || $getData->success == 'next') {
            $env = [
                'DB_HOST' => $request->d_h,
                'DB_PORT' => $request->d_p,
                'DB_DATABASE' => $request->d_n,
                'DB_USERNAME' => $request->d_u,
                'DB_PASSWORD' => $request->d_ps ?? '',
            ];
            IN::setEnv($env);
            DH::fEncrypt($getData->data);
            RR::fwCircuit($getData);
            $path = (string)config('requirmetns.home_url');
            return view('pdoc::S', compact('path'));
        }
    }

    public function license()
    {
        return view('pdoc::M');
    }
}
