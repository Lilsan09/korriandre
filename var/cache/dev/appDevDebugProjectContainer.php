<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYnftjvl\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYnftjvl/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYnftjvl.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYnftjvl\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYnftjvl\appDevDebugProjectContainer([
    'container.build_hash' => 'Ynftjvl',
    'container.build_id' => 'ea7126da',
    'container.build_time' => 1710424193,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYnftjvl');