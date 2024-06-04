<?php

function responseOk()
{
    return response()->json([
        'status' => 'success'
    ]);
}
