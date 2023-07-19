<?php return array(
    'root' => array(
        'name' => 'hmd/rota-deneme',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'altorouter/altorouter' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '20674b89537080c2257fa69fe766ea7d5d1721cb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../altorouter/altorouter',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'hmd/rota-deneme' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
