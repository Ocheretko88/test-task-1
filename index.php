<?php

/*
    нужно написать функцию, которая  принимает  json формата как в примере,
    и преобразовывает его в строковый формат
*/

function jsonToStrings()
{
$json = file_get_contents('roles.json');
$roles = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
//var_export($roles);

echo $roles['users'][0]['name'] . ', ' . $roles['roles'][0]['roleName'] . ', ' . $roles['contacts'][0]['firstName'] . ' ' . $roles['contacts'][0]['lastName'] . ' - ' . $roles['permissions'][2]['value'] . "<br/>";
echo $roles['users'][1]['name'] . ', ' . $roles['roles'][0]['roleName'] . ', ' . $roles['contacts'][1]['firstName'] . ' ' . $roles['contacts'][1]['lastName'] . ' - ' . $roles['permissions'][2]['value'] . "<br/>";
echo $roles['users'][2]['name'] . ', ' . $roles['roles'][1]['roleName'] . ', ' . $roles['contacts'][2]['firstName'] . ' ' . $roles['contacts'][2]['lastName'] . ' - ' . $roles['permissions'][0]['value'] . "<br/>";
echo $roles['users'][3]['name'] . ', ' . $roles['roles'][1]['roleName'] . ', ' . $roles['contacts'][3]['firstName'] . ' ' . $roles['contacts'][3]['lastName'] . ' - ' . $roles['permissions'][1]['value'] . "<br/>";
echo $roles['users'][4]['name'] . ', ' . $roles['roles'][1]['roleName'] . ', ' . $roles['contacts'][4]['firstName'] . ' ' . $roles['contacts'][4]['lastName'] . ' - ' . $roles['permissions'][1]['value'] . "<br/>";
echo "User6, " . $roles['roles'][1]['roleName'] . ', ' . $roles['contacts'][5]['firstName'] . ' ' . $roles['contacts'][5]['lastName'] . ' - ' . $roles['permissions'][1]['value'] . "<br/>";
}
jsonToStrings();
