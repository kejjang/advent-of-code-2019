<?php
include_once __DIR__ . "/autoload.php";

$run_test = true;

// test start
if ($run_test) {
    $map = explode("\n", ".#..#\n.....\n#####\n....#\n...##");
    $detector = new AsteroidDetector($map);
    $detector->calcObservableCount();
    Test::equal('test 1', $detector->getBestLocation()['coordinate'], '3,4');

    $map = explode("\n", "......#.#.\n#..#.#....\n..#######.\n.#.#.###..\n.#..#.....\n..#....#.#\n#..#....#.\n.##.#..###\n##...#..#.\n.#....####");
    $detector = new AsteroidDetector($map);
    $detector->calcObservableCount();
    Test::equal('test 2', $detector->getBestLocation()['coordinate'], '5,8');

    $map = explode("\n", "#.#...#.#.\n.###....#.\n.#....#...\n##.#.#.#.#\n....#.#.#.\n.##..###.#\n..#...##..\n..##....##\n......#...\n.####.###.");
    $detector = new AsteroidDetector($map);
    $detector->calcObservableCount();
    Test::equal('test 3', $detector->getBestLocation()['coordinate'], '1,2');

    $map = explode("\n", ".#..#..###\n####.###.#\n....###.#.\n..###.##.#\n##.##.#.#.\n....###..#\n..#.#..#.#\n#..#.#.###\n.##...##.#\n.....#.#..");
    $detector = new AsteroidDetector($map);
    $detector->calcObservableCount();
    Test::equal('test 4', $detector->getBestLocation()['coordinate'], '6,3');

    $map = explode("\n", ".#..##.###...#######\n##.############..##.\n.#.######.########.#\n.###.#######.####.#.\n#####.##.#.##.###.##\n..#####..#.#########\n####################\n#.####....###.#.#.##\n##.#################\n#####.##.###..####..\n..######..##.#######\n####.##.####...##..#\n.#####..#.######.###\n##...#.##########...\n#.##########.#######\n.####.#.###.###.#.##\n....##.##.###..#####\n.#.#.###########.###\n#.#.#.#####.####.###\n###.##.####.##.#..##");
    $detector = new AsteroidDetector($map);
    $detector->calcObservableCount();
    Test::equal('test 5', $detector->getBestLocation()['coordinate'], '11,13');

    echo "\n";
}
// test end

$map = Reader::split("\n", 'day10');

$detector = new AsteroidDetector($map);
$detector->calcObservableCount();
$best_location = $detector->getBestLocation();

echo 'coords: ', $best_location['coordinate'], "\n";
echo 'count: ', $best_location['count'], "\n";
