<?php

    function responseSuccess($data)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
        ], 200);
    }

    function responseError($msg = 'Something went wrong, please try again', $code = 404)
    {
        return response()->json([
            'success' => false,
            'message' => $msg,
        ], $code);
    }

    function flashSuccess($msg)
    {
        session()->flash('success', $msg);
    }

    function flashError($message = 'Something went wrong, please try again')
    {
        session()->flash('error', $message);
    }
