<?php declare(strict_types=1);

namespace ApiClients\Foundation\Middleware\Annotation;

use ApiClients\Foundation\Middleware\Priority as MiddlewarePriority;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
final class Third implements PriorityInterface
{
    /**
     * @return int
     */
    public function priority(): int
    {
        return MiddlewarePriority::THIRD;
    }
}
