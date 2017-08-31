<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * display a list of mails
     * 
     * @param String type :all, sent, important, drafts, trash
     * @param String categories :work, clients, etc
     *
     * @return 
     */
    public function inbox($type = 'all', $categories = '')
    {
        $data = [];
        return view('admin.mailbox.inbox', ['data' => $data]);
    }

    /**
     * write a email
     *
     * @return Int id :mail pk
     */
    public function compose()
    {
        $data = [];
        return view('admin.mailbox.compose', ['data' => $data]);
    }


    /**
     * read/reply the mail
     *
     * @param Int id :mail pk
     * @return 
     */
    public function view($id)
    {
        $data = [];
        return view('admin.mailbox.detail', ['data' => $data]);
    }


    /**
     * send the mail
     *
     * @param Int id :mail pk
     * @return Bool
     */
    public function send($id)
    {

    }

    /**
     * move to trash
     *
     * @param Int id :mail pk
     * @return Bool
     */
    public function remove($id)
    {

    }

    public function search()
    {
        $data = [];
        return view('admin.mailbox.search', ['data' => $data]);
    }
}
