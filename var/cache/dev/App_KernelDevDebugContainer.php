<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFrwYXXC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFrwYXXC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFrwYXXC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFrwYXXC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFrwYXXC\App_KernelDevDebugContainer([
    'container.build_hash' => 'FrwYXXC',
    'container.build_id' => '3e00b9ee',
    'container.build_time' => 1671463556,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFrwYXXC');
