<?php
//function flatten($coll)
//{
//    $result = [];
//    foreach ($coll as $item) {
//        if (is_array($item)) {
//            $result = [...$result, ...$item];
//        } else {
//            $result[] = $item;
//        }
//    }
//
//    return $result;
//}

// Моё решение
//function removeFirstLevel($tree) {
//    $result = [];
//    $i = 0;
//    foreach ($tree as $childrens) {
//        if(is_array($childrens)) {
//            foreach ($childrens as $children)
//            $result[] = $children;
//        }
//    }
//    return $result;
//}

function removeFirstLevel($tree)
{
    $nodes = array_filter($tree, fn($node) => is_array($node));
    return array_merge(...$nodes);
}

$tree = [1, 2, [3, 5], [[4, 3], 2]];

print_r(removeFirstLevel($tree));

function generator()
{
    $tree = mkdir(
        'php-package',
        [
            mkfile('Makefile'),
            mkfile('README.md'),
            mkdir('dist'),
            mkdir(
                'tests',
                [
                    mkfile('test.php', ['type' => 'text/php'])
                ]
            ),
            mkdir(
                'src',
                [
                    mkfile('index.php', ['type' => 'text/php'])
                ]
            ),
            mkfile('phpunit.xml', ['type' => 'text/xml']),
            mkdir(
                'assets',
                [
                    mkdir(
                        'util',
                        [
                            mkdir(
                                'cli',
                                [
                                    mkfile('LICENSE')
                                ]
                            )
                        ]
                    )
                ],
                ['owner' => 'root', 'hidden' => false]
            )
        ],
        ['hidden' => true]
    );

    return $tree;
}