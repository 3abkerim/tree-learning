<?php

namespace App\Factory;

use App\Entity\Module;
use App\Enum\Status;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Module>
 */
final class ModuleFactory extends PersistentProxyObjectFactory
{
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Module::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'title' => self::faker()->sentence(3),
            'description' => self::faker()->paragraph(),
            'content' => self::faker()->text(),
            'repositoryLink' => self::faker()->url(),
            'moduleOrder' => self::faker()->numberBetween(1, 10),
            'duration' => self::faker()->numberBetween(1, 5),
            'is_updated' => self::faker()->boolean(),
            'status' => self::faker()->randomElement(Status::cases()),
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];
    }

    protected function initialize(): static
    {
        return $this;
    }
}
