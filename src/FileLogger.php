<?php

namespace Styde;

class FileLogger
{
    public static function info($message)
    {
        file_put_contents(__DIR__.'/../storage/log.txt',
                        '('.date('Y-m-d H:i:s').') \n'.$message.'\n',
                        FILE_APPEND
                    );
    }
}