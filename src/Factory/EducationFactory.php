<?php

namespace App\Factory;

use App\Entity\Education;
use App\Enum\Status;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Education>
 */
final class EducationFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Education::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {

        return [
            'name' => self::faker()->shuffleArray(['EM', '3WA', 'ESTIAM', 'Arcplex', 'ESEMI'])[0],
            'start_date' => self::faker()->dateTimeBetween('-2 years', 'now'),
            'end_date' => self::faker()->dateTimeBetween('now', '+2 years'),
            'status' => self::faker()->randomElement(Status::cases()),
            'created_at' => self::faker()->dateTimeBetween('-2 years', 'now'),
            'updated_at' => self::faker()->dateTimeBetween('now', '+2 years'),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Education $education): void {})
            ;
    }
}