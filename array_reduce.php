<?php
//function getMenCountByYear($users)
//{
//
//    $newArr = array_filter($users,function($row)
//    {
//        return $row['gender'] === 'male';
//    });
//
//    return array_reduce($newArr, function($acc, $element)
//    {
//            $year = substr($element['birthday'], 0, 4);
//            if (array_key_exists($year, $acc)) {
//                $acc[$year]++;
//            } else {
//                $acc[$year] = 1;
//            }
//            return $acc;
//        }, []);
//
//}
//
//
//
//$users = [
//    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
//    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
//    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
//    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
//    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
//    ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
//    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
//    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
//    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
//    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
//];
//
//$newArr = array_filter($users,function($row)
//{
//    return $row['gender'] === 'male';
//});
//
//$newArr2 = array_reduce(array_filter($users,function($row)
//{
//    return $row['gender'] === 'male';
//}), function($acc, $element)
//{
//    $year = substr($element['birthday'], 0, 4);
//    if (array_key_exists($year, $acc)) {
//        $acc[$year]++;
//    } else {
//        $acc[$year] = 1;
//    }
//    return $acc;
//}, []);
////print_r($newArr2);
//print_r(getMenCountByYear($users));


$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];
const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];
function getFreeDomainsCount($emails)
{
    $domains = array_map(fn($email) => explode('@', $email)[1], $emails);
    $freeDomains = array_filter(
        $domains,
        fn($domain) => in_array($domain, FREE_EMAIL_DOMAINS)
    );
    return array_reduce($freeDomains, function ($acc, $domain) {
        $acc[$domain] = ($acc[$domain] ?? 0) + 1;
        return $acc;
    }, []);
//
//    $newArr2 = array_reduce($emails, function($acc,$element){
//
//
//    if (array_key_exists('gmail.com', $acc))
//        {
//        $acc[$email]++;
//        } else {
//        $acc[$email] = 1;
//        }
//        return $acc;
//        }, []);
//    return $newArr2;

}

print_r(getFreeDomainsCount($emails));