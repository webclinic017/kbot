<?php

namespace Bowhead\Http\Controllers;

use Bowhead\Traits\Mapper;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;



/**
 * Class Accounts
 * @package Bowhead\Http\Controllers
 */
class Accounts extends Controller
{
    /**
     * @var
     */
    protected $dataArray;

    use Mapper;

    public function __construct(Request $request)
    {
        $this->dataArray = $request->all();
    }

    function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    public function getAccountsAction()
    {
        $data = $this->dataArray;
        return array('test'=>1);
    }

    public function getAccountAction()
    {
        return [];
    }

    public function posttAccountAction()
    {

    }

    public function patchAccountAction()
    {

    }

    public function deleteAccountAction()
    {

    }

}
