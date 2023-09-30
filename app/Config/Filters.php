<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\FilterPublik;
use App\Filters\FilterSuperadmin;
use App\Filters\FilterAdmin;
use App\Filters\FilterOperator;
use App\Filters\FilterGuru;
use App\Filters\FilterSiswa;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, string>
     * @phpstan-var array<string, class-string>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filterpublik'      => FilterPublik::class, //Level = NULL Atau 0
        'filtersuperadmin'  => FilterSuperadmin::class, //Level = 1
        'filteradmin'       => FilterAdmin::class, //Level = 2
        'filteroperator'    => FilterOperator::class, //Level = 3
        'filterguru'        => FilterGuru::class, //Level = 4
        'filtersiswa'       => FilterSiswa::class, //Level = 5
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, array<string>>
     * @phpstan-var array<string, list<string>>|array<string, array<string, array<string, string>>>
     */
    public array $globals = [
        'before' => [

            'filterpublik'    =>
            [
                'except' =>
                [
                    'register',    'register/*',
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            'filtersuperadmin'    =>
            [
                'except' =>
                [
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            'filteradmin'    =>
            [
                'except' =>
                [
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            'filteroperator'    =>
            [
                'except' =>
                [
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            'filterguru'    =>
            [
                'except' =>
                [
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            'filtersiswa'    =>
            [
                'except' =>
                [
                    'login',    'login/*',
                    'home',    'home/*',
                    '/',
                ]
            ],
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            
            'filtersuperadmin'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'superadmin', 'superadmin/*',
                    'admin', 'admin/*',
                    'operator', 'operator/*',
                    'guru', 'guru/*',
                    'siswa', 'siswa/*',
                    '/',
                ]
            ],
            'filteradmin'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'admin', 'admin/*',
                    '/',
                ]
            ],
            'filteroperator'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'operator', 'operator/*',
                    '/',
                ]
            ],
            'filterguru'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'guru', 'guru/*',
                    '/',
                ]
            ],
            'filtersiswa'    =>
            [
                'except' =>
                [
                    'logout', 'logout/*',
                    'siswa', 'siswa/*',
                    '/',
                ]
            ],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
