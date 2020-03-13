<?php
    require_once __DIR__ . '/Company.php';
    require_once __DIR__ . '/Employee.php';
    require_once __DIR__ . '/Developer.php';
    require_once __DIR__ . '/Designer.php';
    require_once __DIR__ . '/SpecialtyType.php';
    require_once __DIR__ . '/ProgrammingLanguage.php';
    require_once __DIR__ . '/DesignerType.php';

    $company = new Company(1,'Summa Solutions');

    $programmingLanguage1 = new ProgrammingLanguage(1 ,'PHP');
    $programmingLanguage2 = new ProgrammingLanguage(2 ,'NET');
    $programmingLanguage3 = new ProgrammingLanguage(3 ,'Python');
    $designerType1 = new DesignerType(1,'Graphic');
    $designerType2 = new DesignerType(2,'Web');

    $developer1 = new Developer(1,'Exequiel', 'Hernando', 28, $programmingLanguage1);
    $developer2 = new Developer(2,'Agustin', 'Santos', 27, $programmingLanguage2);
    $developer3 = new Developer(3,'Enriqueta', 'Oliva', 26, $programmingLanguage3);
    $designer1 = new Designer(4,'Lucia', 'Arrie', 29, $designerType1);
    $designer2 = new Designer(5,'Luciano', 'Meliendrez', 32, $designerType2);

    $company->addEmployee($developer1);
    $company->addEmployee($developer2);
    $company->addEmployee($developer3);
    $company->addEmployee($designer1);
    $company->addEmployee($designer2);

    $company->getEmployees();
    var_dump($company->getEmployees());
    
    $company->getEmployee(3);
    var_dump($company->getEmployee(3));

    $company->getAverageAgeEmployee();

    var_dump($company->getAverageAgeEmployee());

?>