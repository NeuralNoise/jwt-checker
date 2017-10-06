<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Checker;

/**
 * Interface HeaderCheckerInterface.
 */
interface HeaderCheckerInterface
{
    /**
     * @param $value
     *
     * @throws \InvalidArgumentException
     */
    public function checkHeader($value);

    /**
     * @return string
     */
    public function supportedHeader(): string;

    /**
     * @return bool
     */
    public function protectedHeaderOnly(): bool;
}
