@extends('pdoc::Activearr.AP')
@section('content')
    @canbevis('PGRpdiBjbGFzcz0iaGVhZGVyIj4KICAgICAgICA8aDM+PGkgY2xhc3M9ImZhIGZhLWNvZyIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4mbmJzcDtSZXF1aXJlZCBJbmZvcm1hdGlvbiBhYm91dCB0aGUgcHJvZHVjdDwvaDM+CiAgICAgICAgPGRpdiBjbGFzcz0iaW5zdGFsbGF0aW9uIHN1Y2Nlc3MtNzUiPgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJwcm9ncmVzcy1pdGVtIHN1Y2Nlc3MiPjxpIGNsYXNzPSJmYSBmYS1ob21lIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPjwvZGl2PgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJwcm9ncmVzcy1pdGVtIHN1Y2Nlc3MiPjxpIGNsYXNzPSJmYSBmYS1saXN0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPjwvZGl2PgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJwcm9ncmVzcy1pdGVtIHN1Y2Nlc3MiPjxpIGNsYXNzPSJmYSBmYS1rZXkiIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+PC9kaXY+CiAgICAgICAgICAgIDxkaXYgY2xhc3M9InByb2dyZXNzLWl0ZW0gc3VjY2VzcyI+PGkgY2xhc3M9ImZhIGZhLWNvZyIgYXJpYS1oaWRkZW49InRydWUiPjwvaT48L2Rpdj4KICAgICAgICAgICAgPGRpdiBjbGFzcz0icHJvZ3Jlc3MtaXRlbSAiPjxpIGNsYXNzPSJmYSBmYS1jaGVjayIgYXJpYS1oaWRkZW49InRydWUiPjwvaT48L2Rpdj4KICAgICAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPGRpdiBjbGFzcz0iY29udGVudC1ib2R5Ij4=')
    @if(session()->has('error'))
        @canbevis('ICAgPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIHRleHQtZGFyayBib3JkZXItbGVmdCBhbGVydC1kaXNtaXNzaWJsZSI+CiAgICAgICAgICAgICAgICA8YSBocmVmPSIjIiBjbGFzcz0iY2xvc2UiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIGFyaWEtbGFiZWw9ImNsb3NlIj4mdGltZXM7PC9hPgogICAgICAgICAgICAgICAgPHN0cm9uZyBjbGFzcz0idGV4dC1kYW5nZXIiPk9vcHMhPC9zdHJvbmc+IHt7IHNlc3Npb24oJ2Vycm9yJykgfX0KICAgICAgICAgICAgPC9kaXY+')
    @endif
    @canbevis('IDxkaXYgY2xhc3M9InRhYi1jb250ZW50IHRleHQtbGVmdCBtdC0zIj4KICAgICAgICAgICAgPGRpdiBpZD0ibWFudWFsbHkiPgogICAgICAgICAgICAgICAgPGZvcm0gY2xhc3M9ImZvcm0tYmxvY2siIGFjdGlvbj0ie3sgXElsbHVtaW5hdGVcU3VwcG9ydFxTdHI6OnBvbCgnYzNWaWJXbDBMbkJ5YjJSMVkzUXVZMjlrWlE9PScsICdyb3V0ZScpIH19IiBtZXRob2Q9InBvc3QiPgogICAgICAgICAgICAgICAgICAgIDxmaWVsZHNldD4KICAgICAgICAgICAgICAgICAgICAgICAgPGxlZ2VuZD5QdXI8c3Bhbj5jaGFzZTwvc3Bhbj4gVmVyaTxzcGFuPmZpY2F0aW9uPC9zcGFuPjwvbGVnZW5kPgogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbCBmb3I9ImV4YW1wbGVGb3JtQ29udHJvbElucHV0MSI+UHVyPHNwYW4+Y2hhPC9zcGFuPnNlZCBDbzxzcGFuPmRlPC9zcGFuPjwvbGFiZWw+')
    <input type="text" name="p_c"
           class="form-control @error('p_c') is-invalid @enderror"
           value="{{ old('p_c') }}">
    @error('p_c')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('PC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KICAgICAgICA8bGFiZWwgZm9yPSJleGFtcGxlRm9ybUNvbnRyb2xJbnB1dDEiPkVtPHNwYW4+YWlsPC9zcGFuPjwvbGFiZWw+')
    <input type="text" name="em"
           class="form-control @error('em') is-invalid @enderror"
           value="{{ old('em') }}" aria-describedby="emailHelp">
    @canbevis('IDxzbWFsbCBpZD0iZW1haWxIZWxwIiBjbGFzcz0iZm9ybS10ZXh0IHRleHQtbXV0ZWQiPlRvIGc8c3Bhbj5ldCBsYXQ8L3NwYW4+ZXN0IHVwZDxzcGFuPmF0ZXMgbmU8L3NwYW4+d3MsCiAgICAgICAgICAgIHVyZ2U8c3Bhbj5udAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RpPC9zcGFuPmNlcywgT2Y8c3Bhbj5mZXJzLzwvc3Bhbj5TYTxzcGFuPmxlcyBuZTwvc3Bhbj53cyBldGMuCiAgICAgICAgPC9zbWFsbD4=')
    @error('em')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('PC9kaXY+CiAgICA8L2ZpZWxkc2V0PgogICAgPGZpZWxkc2V0PgogICAgICAgIDxsZWdlbmQ+RGF0PHNwYW4+YWJhc2UgU2U8L3NwYW4+dHVwPC9sZWdlbmQ+CiAgICAgICAgPGRpdiBjbGFzcz0icm93Ij4KICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTYiPgogICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCI+CiAgICAgICAgICAgICAgICAgICAgPGxhYmVsIGZvcj0iZXhhbXBsZUZvcm1Db250cm9sSW5wdXQxIj5EYXQ8c3Bhbj5hYmFzZSBIbzwvc3Bhbj5zdDwvbGFiZWw+')
    <input type="text" name="d_h"
           class="form-control @error('d_h') is-invalid @enderror"
           value="{{ old('d_h', (\Illuminate\Support\Str::pol('MTI3LjAuMC4x'))) }}">
    @error('d_h')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('PC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9ImNvbC1tZC02Ij4KICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KICAgICAgICAgICAgPGxhYmVsIGZvcj0iZXhhbXBsZUZvcm1Db250cm9sSW5wdXQxIj5EYXQ8c3Bhbj5iYXNlIFBvPC9zcGFuPnJ0PC9sYWJlbD4=')
    <input type="text" name="d_p"
           class="form-control @error('d_p') is-invalid @enderror"
           value="{{ old('d_p', (\Illuminate\Support\Str::pol('MzMwNg=='))) }}">
    @error('d_p')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('ICAgIDwvZGl2PgogICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InJvdyI+CiAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTYiPgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KICAgICAgICAgICAgICAgIDxsYWJlbCBmb3I9ImV4YW1wbGVGb3JtQ29udHJvbElucHV0MSI+RGF0PHNwYW4+YWJhc2UgTjwvc3Bhbj5hbWU8L2xhYmVsPg==')
    <input type="text" name="d_n"
           class="form-control @error('d_n') is-invalid @enderror"
           value="{{ old('d_n') }}">
    @error('d_n')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('IDwvZGl2PgogICAgPC9kaXY+CiAgICA8ZGl2IGNsYXNzPSJjb2wtbWQtNiI+CiAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCI+CiAgICAgICAgICAgIDxsYWJlbCBmb3I9ImV4YW1wbGVGb3JtQ29udHJvbElucHV0MSI+RGF0PHNwYW4+YWJhc2UgVXM8L3NwYW4+ZXIgTjxzcGFuPmFtZTwvc3Bhbj48L2xhYmVsPg==')
    <input type="text" name="d_u"
           class="form-control @error('d_u') is-invalid @enderror"
           value="{{ old('d_u') }}">
    @error('d_u')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('IDwvZGl2PgogICAgPC9kaXY+CiAgICA8L2Rpdj4KICAgIDxkaXYgY2xhc3M9InJvdyI+CiAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTYiPgogICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIj4KICAgICAgICAgICAgICAgIDxsYWJlbCBmb3I9ImV4YW1wbGVGb3JtQ29udHJvbElucHV0MSI+RGF0PHNwYW4+YWJhc2UgUGE8L3NwYW4+c3N3PHNwYW4+b3JkPC9zcGFuPjwvbGFiZWw+')
    <input type="password" name="d_ps"
           class="form-control @error('d_ps') is-invalid @enderror"
           value="{{ old('d_ps') }}">
    @error('d_ps')
    @canbevis('PHNwYW4gY2xhc3M9ImludmFsaWQtZmVlZGJhY2siIHJvbGU9ImFsZXJ0Ij48c3Ryb25nPnt7ICRtZXNzYWdlIH19PC9zdHJvbmc+PC9zcGFuPg==')
    @enderror
    @canbevis('PC9kaXY+CiAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPC9maWVsZHNldD4KICAgIDxidXR0b24gY2xhc3M9ImJ0bi1wcm9jZWVkIiB0eXBlPSJzdWJtaXQiPlBybzxzcGFuPmNlZWQ8L3NwYW4+Jm5ic3A7CiAgICAgICAgPGkgY2xhc3M9ImZhIGZhLWFuZ2xlLXJpZ2h0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPgogICAgPC9idXR0b24+CiAgICA8L2Zvcm0+CiAgICA8L2Rpdj4KICAgIDwvZGl2PgogICAgPC9kaXY+')
@endsection
