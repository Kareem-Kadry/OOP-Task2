<!DOCTYPE html>
<html>
<head>
    <title>Courses Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Courses Information</h2>


    
    <?php
    require_once 'Course.php';
    require_once 'Intro_To_Programming.php';
    require_once 'FullStack.php';
    require_once 'Ai.php';

    // Array to hold courses
    $courses = [];

    // Introduction to Programming Course
    $introduction_course = new Intro_To_Programming();
    $introduction_course->title = "Introduction To Programming";
    $introduction_course->instructor = "Mohamed Ebrahim";
    $introduction_course->duration = "3 Months";
    $introduction_course->description = "This course will teach you how to program in Scratch, an easy to use visual programming language.";
    $introduction_course->set_language("C++");
    $courses[] = $introduction_course;

    // Full Stack Course
    $fullstack_course = new FullStack();
    $fullstack_course->title = "Full Stack Course";
    $fullstack_course->instructor = "Mostafa Mahfouz";
    $fullstack_course->duration = "6 Months";
    $fullstack_course->description = "Launch your Full-Stack career. Build the skills and hands-on experience to get job-ready in under six months.";
    
    $fullstack_course->set_languages("Laravel", "Vue");
    $courses[] = $fullstack_course;

    // AI Course
    $ai_course = new Ai();
    $ai_course->title = "AI Course";
    $ai_course->instructor = "Hassan Hashem";
    $ai_course->duration = "5 Months";
    $ai_course->description = "Understand the key AI terminology and applications and launch your AI career.";
    ?>
    <table>
    <tr>
        <th>Course Title</th>
        <th>Instructor</th>
        <th>Duration</th>
        <th>Description</th>
        <th>Enrolled Students</th>
        <th>Notes</th>
    </tr>
    <tr>
        <td><?php echo $introduction_course->title;?></td>
        <td><?php echo $introduction_course->instructor;?></td>
        <td><?php echo $introduction_course->duration;?></td>
        <td><?php echo $introduction_course->description;?></td>
        <td><?php $introduction_course->enroll("Hassan Ahmed");?></td>
        <td><?php $introduction_course->get_language();?></td>
    </tr>

    <tr>
        <td><?php echo $fullstack_course->title;?></td>
        <td><?php echo $fullstack_course->instructor;?></td>
        <td><?php echo $fullstack_course->duration;?></td>
        <td><?php echo $fullstack_course->description;?></td>
        <td><?php $fullstack_course->enroll("Kareem Kadry");?></td>
        <td><?php $fullstack_course->get_languages();?></td>
    </tr>
    <tr>
        <td><?php echo $ai_course->title;?></td>
        <td><?php echo $ai_course->instructor;?></td>
        <td><?php echo $ai_course->duration;?></td>
        <td><?php echo $ai_course->description;?></td>
        <td><?php $ai_course->enroll("Alaa Yaqout");?></td>
        <td><?php $ai_course->notes();?></td>
    </tr>
</table>

</body>
</html>
