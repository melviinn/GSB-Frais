<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMV99hxa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMV99hxa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMV99hxa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMV99hxa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMV99hxa\App_KernelDevDebugContainer([
    'container.build_hash' => 'MV99hxa',
    'container.build_id' => '4ba6e66d',
    'container.build_time' => 1671137118,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMV99hxa');
