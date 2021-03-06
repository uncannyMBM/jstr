<?php

namespace Doclab\Doclab\Http\Controllers;

use App\Http\Controllers\Controller;
use Doclab\Doclab\Console\Talk\TooMuch;
use Facades\Doclab\Doclab\Services\BasicServices;
use Facades\Doclab\Doclab\Services\Installer;
use Facades\Doclab\Doclab\Services\DocHash;
use Illuminate\Http\Request;


class PackageController extends Controller
{
    use TooMuch;
    public function index()
    {
        $pid = BasicServices::getPid();
        return view('doclab::index', compact('pid'));
    }

    public function checkRequirements()
    {
        $checkExtensions = Installer::checkRequirements();
        return view('doclab::check-requirements', compact('checkExtensions'));
    }

    public function checkPermissions()
    {
        $checkExtensions = Installer::checkRequirements();
        if (!in_array(0, $checkExtensions)) {
            $chekPermissions = Installer::checkPermissions();
            return view('doclab::check-permissions', compact('chekPermissions'));
        }
        return redirect()->route('installer');
    }

    public function productCode()
    {
        $chekPermissions = Installer::checkPermissions();
        if (isset($chekPermissions['grantPermission']) && $chekPermissions['grantPermission'] == 1) {
            return view('doclab::product-validation');
        }
        return redirect()->route('installer');
    }

    public function submitProductCode(Request $request)
    {
        $data['purchased_code'] = $request->purchased_code;
        $this->validate($request, [
            'purchased_code' => 'required|min:5',
            'database_host' => 'required|min:5',
            'database_port' => 'required|min:2',
            'database_name' => 'required|min:1',
            'database_username' => 'required|min:1',
            'database_password' => 'nullable|min:5'
        ]);
        $data['purchased_code'] = $request->purchased_code;
        $getData = json_decode(Installer::getToken($data));

        if (!isset($getData) || isset($getData->error)) {
            return back()->with('error', $getData->error ?? 'Something went wrong. Please contact with your author.')->withInput();
        } elseif (isset($getData->success) || $getData->success == 'next') {
            $env = [
                'DB_HOST' => $request->database_host,
                'DB_PORT' => $request->database_port,
                'DB_DATABASE' => $request->database_name,
                'DB_USERNAME' => $request->database_username,
                'DB_PASSWORD' => $request->database_password ?? '',
            ];
            Installer::setEnv($env);
            DocHash::fEncrypt($getData->secret);
            $path = (string) config('requirmetns.home_url');
            return view('doclab::success', compact('path'));
        }
    }

    public function license()
    {
        return view('doclab::maintain');
    }
}
