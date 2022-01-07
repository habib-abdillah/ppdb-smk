<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthPeserta implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('account') && !in_array('login',$request->uri->getSegments())) {
            return redirect()->route('login_peserta')->with('notification','Anda harus login terlebih dahulu');
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if(in_array('login',$request->uri->getSegments()) && session()->get('account')){
            return redirect()->route('dashboard_peserta');
        }elseif(!is_null(session()->get('account')) && (session()->get('account')['role'] == 'pendaftar' && $request->uri->getSegments()[0] == 'admin')) {
            return redirect()->to('peserta');
        }elseif(!is_null(session()->get('account')) && (session()->get('account')['role'] != 'pendaftar' && $request->uri->getSegments()[0] == 'peserta')) {
            return redirect()->route('admin');
        }
    }
}
