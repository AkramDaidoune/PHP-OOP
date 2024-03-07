<?php

// Namespace
namespace Hospital;

// Abstract class
abstract class Person {
    // Properties
    private string $name;
    private string $eyeColor;
    private string $hairColor;
    private float $height;
    private float $weight;
    private string $role;

    // Constructor
    public function __construct(string $name, string $eyeColor, string $hairColor, float $height, float $weight, string $role) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->height = $height;
        $this->weight = $weight;
        $this->role = $role;
    }

    // Getter methods
    public function getName(): string {
        return $this->name;
    }

    public function getEyeColor(): string {
        return $this->eyeColor;
    }

    public function getHairColor(): string {
        return $this->hairColor;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function getRole(): string {
        return $this->role;
    }
}

// Abstract class
abstract class Staff extends Person {
    // Properties
    private float $hourlyRate;

    // Constructor
    public function __construct(string $name, string $eyeColor, string $hairColor, float $height, float $weight, string $role, float $hourlyRate) {
        parent::__construct($name, $eyeColor, $hairColor, $height, $weight, $role);
        $this->hourlyRate = $hourlyRate;
    }

    // Getter method
    public function getHourlyRate(): float {
        return $this->hourlyRate;
    }

    // Abstract method
    abstract public function setSalary(float $hoursWorked): float;
}

// Child class
class Doctor extends Staff {
    // Properties
    private string $specialization;

    // Constructor
    public function __construct(string $name, string $eyeColor, string $hairColor, float $height, float $weight, string $role, float $hourlyRate, string $specialization) {
        parent::__construct($name, $eyeColor, $hairColor, $height, $weight, $role, $hourlyRate);
        $this->specialization = $specialization;
    }

    // Getter method
    public function getSpecialization(): string {
        return $this->specialization;
    }

    // Method implementation
    public function setSalary(float $hoursWorked): float {
        return $hoursWorked * $this->getHourlyRate();
    }
}

// Child class
class Nurse extends Staff {
    // Properties
    private string $department;

    // Constructor
    public function __construct(string $name, string $eyeColor, string $hairColor, float $height, float $weight, string $role, float $hourlyRate, string $department) {
        parent::__construct($name, $eyeColor, $hairColor, $height, $weight, $role, $hourlyRate);
        $this->department = $department;
    }

    // Getter method
    public function getDepartment(): string {
        return $this->department;
    }

    // Method implementation
    public function setSalary(float $hoursWorked): float {
        return $hoursWorked * $this->getHourlyRate();
    }
}

// Child class
class Patient extends Person {
    // Properties
    private string $bloodGroup;

    // Constructor
    public function __construct(string $name, string $eyeColor, string $hairColor, float $height, float $weight, string $bloodGroup) {
        parent::__construct($name, $eyeColor, $hairColor, $height, $weight, "Patient");
        $this->bloodGroup = $bloodGroup;
    }

    // Getter method
    public function getBloodGroup(): string {
        return $this->bloodGroup;
    }
}

// Usage
$doctor = new Doctor("Dr. Smith", "Blue", "Brown", 180.0, 75.0, "Doctor", 50.0, "Cardiology");
$nurse = new Nurse("Nurse Jane", "Green", "Blonde", 170.0, 65.0, "Nurse", 30.0, "Emergency");
$patient = new Patient("John Doe", "Brown", "Black", 175.0, 70.0, "AB+");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Hospital Management</h1>

    <h2>Doctor Information</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Specialization</th>
            <th>Hourly Rate</th>
        </tr>
        <tr>
            <td><?php echo $doctor->getName(); ?></td>
            <td><?php echo $doctor->getRole(); ?></td>
            <td><?php echo $doctor->getSpecialization(); ?></td>
            <td><?php echo $doctor->getHourlyRate(); ?></td>
        </tr>
    </table>

    <h2>Nurse Information</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Department</th>
            <th>Hourly Rate</th>
        </tr>
        <tr>
            <td><?php echo $nurse->getName(); ?></td>
            <td><?php echo $nurse->getRole(); ?></td>
            <td><?php echo $nurse->getDepartment(); ?></td>
            <td><?php echo $nurse->getHourlyRate(); ?></td>
        </tr>
    </table>

    <h2>Patient Information</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Blood Group</th>
        </tr>
        <tr>
            <td><?php echo $patient->getName(); ?></td>
            <td><?php echo $patient->getRole(); ?></td>
            <td><?php echo $patient->getBloodGroup(); ?></td>
        </tr>
    </table>
</body>
</html>
