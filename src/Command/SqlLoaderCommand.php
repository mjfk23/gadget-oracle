<?php

declare(strict_types=1);

namespace Gadget\Oracle\Command;

use Gadget\Console\Shell\ProcessShellEnv;
use Gadget\Oracle\Command\Input\SqlLoaderOptions;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('oracle:sqlldr', 'SQL*Loader loads data from external files into Oracle Database tables.')]
final class SqlLoaderCommand extends OracleCommand
{
    /** @inheritdoc */
    public function __construct(
        SqlLoaderOptions $oracleOptions,
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
