<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBM7vzZu\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBM7vzZu/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBM7vzZu.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBM7vzZu\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerBM7vzZu\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'BM7vzZu',
    'container.build_id' => 'e54a0010',
    'container.build_time' => 1518084902,
));