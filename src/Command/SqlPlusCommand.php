<?php

declare(strict_types=1);

namespace Gadget\Oracle\Command;

use Gadget\Console\Shell\ProcessShellEnv;
use Gadget\Oracle\Command\Input\SqlPlusOptions;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('oracle:sqlplus', 'SQL*Plus executes SQL, PL/SQL and SQL*Plus statements.')]
final class SqlPlusCommand extends OracleCommand
{
    /** @inheritdoc */
    public function __construct(
        SqlPlusOptions $oracleOptions,
        ProcessShellEnv $shellEnv,
        bool $throwOnError = true,
        string|null $name = null
    ) {
        parent::__construct(
            oracleOptions: $oracleOptions,
            shellEnv: $shellEnv,
            throwOnError: $throwOnError,
            name: $name
        );
    }
}
