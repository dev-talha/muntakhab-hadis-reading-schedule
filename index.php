<head>
    <meta charset="utf-8">

    <title> মুন্তাখাব হাদিস </title>
    <meta name="description"
        content=" Visit the website to find out who will be reading today's Hadith, from which chapter, or which specific day you should read which Hadith. ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: "Noto Sans Bengali", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
      tr.bg-success{height: 50px;vertical-align: middle;}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="p-2 p-lg-5 shadow">
                    <h1 class="text-center mt-3">মুন্তাখাব হাদিস</h1>
                    <h5 class="text-center mb-5"><a href="muntakhab-hadis.pdf" target="blank">বইটি পড়তে এখানে ক্লিক
                            করুন</a> || <a href="muntakhab-hadis.pdf" download>Download </a> </h5>
                    <?php
    
                        function get_day_of_week($date)
                        {
                            $date_obj = new DateTime($date);
                            return $date_obj->format('l'); // 'l' format returns the full day of the week
                        }
    
                        $chapter = array("কালেমায়ে তাইয়্যেবা", "নামায", "এলেম ও যিকির", "একরামে মুসলিম", "এখলাছে নিয়ম", "দাওয়াত ও তবলীগ", "অহেতুক কথা বার্তা");
                        $c1s = 1;$c1e = 200;
                        $c2s = 1;$c2e = 280;
                        $c3s = 1;$c3e = 276;
                        $c4s = 1;$c4e = 390;
                        $c5s = 1;$c5e = 62;
                        $c6s = 1;$c6e = 192;
                        $c7s = 1;$c7e = 49;
    
                        $persons = array(
                            "Nazmos Shakib",
                            "Nur Nabi",
                            "Ariful Haque",
                            "Rafiul Islam",
                            "Nishad",
                            "Mahabur Rahman",
                            "Abdul Kader",
                            "Borhan Uddin",
                            "Md Alamgir Hossain",
                            "Bappy Hossen",
                            "Md Omar Faruk Nahid",
                            "Apple Mahmud",
                            "Niamul Habib",
                            "Mizanur Rahman",
                            "Abu Talha",
                            "MD. Riaz",
                            "Nazrul Islam",
                            "Golam Rabbani",
                            "Baijid Hossain",
                            "Syed Kawsar",
                            "Mashikur Rahman",
                            "MD Biplop Hossain",
                            "Rony Mondol",
                            "Anamul Haque",
                            "Sujad Ud Doula",
                            "Nur Hasan",
                            "AL Amin"
                        );
                        $numPersons = count($persons);
                        $days =730; // Total number of days to read Hadis
                        $start_date = "28-04-2024";// Starting date
                        // Convert starting date to a timestamp
                        $start_timestamp = strtotime($start_date);
    
                        echo "<table class='table table-striped '> <tr class='bg-success text-white fw-bold'> <td>Date</td><td>Person</td><td>Chapter</td><td>Hadis No.</td> </tr>";
                        $today_date = date("d-m-Y");

                        $personIndex = 0;
                        $current_chapter_index=0;
                        $count=0;

                        for ($day = 1; $day <= $days; $day++) {
    
                            $random_chapter = array_rand($chapters);
                            $chapter_info = $chapters[$random_chapter];
    
    
                            // Calculate the timestamp for the current date
                            $current_timestamp = strtotime("+$day days", $start_timestamp);
    
                            $current_date = date("d-m-Y", $current_timestamp);
    
    
                            $t = new DateTime($today_date);
                            $c = new DateTime($current_date);
                            $displayNone = ($t <= $c) ? " " : "style='display:none;'";
    
                            echo "<tr  $displayNone>";
                            if($displayNone){$count++;}
                            
                            // Format the current date 
                            $highlight = ($current_date == $today_date) ? "style='font-weight:bold;'" : "";
    
                            $current_day_of_week = get_day_of_week($current_date);
    
                            if ($current_day_of_week == "Friday") {
                                echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                echo "<td> Anonymous </td>";
                                echo "<td>" .   $chapter[6]    . "</td>";
                                echo "<td>" . $c7s . ", ";
                                    if ($c7s > $c7e) {
                                        $c1s = 1;
                                    } else if ($c7s == $c7e) {
                                        $c7s = 0;
                                    }
                                    echo ++$c7s . "</td>";
                                    $c7s++;
    
                            } else {
                                $reader = $persons[$personIndex]; // Assign the next person from the array
                                $personIndex = ($personIndex + 1) % $numPersons; // Move to the next person
    
                                $current_chapter_index = ($day + 1) % count($chapter); // Get the index of the current chapter
                                 $current_chapter = $chapter[$current_chapter_index];
    
    
    
                                if ($current_chapter == "কালেমায়ে তাইয়্যেবা") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>" . $current_chapter . "</td>";
                                    echo "<td>" . $c1s . ", ";
                                    if ($c1s > $c1e) {
                                        $c1s = 1;
                                    } else if ($c1s == $c1e) {
                                        $c1s = 0;
                                    }
                                    echo ++$c1s . "</td>";
                                    $c1s++;
                                }
                                if ($current_chapter == "নামায") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c2s . ", ";
                                    if ($c2s > $c2e) {
                                        $c2s = 1;
                                    } else if ($c2s == $c2e) {
                                        $c2s = 0;
                                    }
                                    echo ++$c2s . "</td>";
                                    $c2s++;
                                }
                                if ($current_chapter == "এলেম ও যিকির") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c3s . ", ";
                                    if ($c3s > $c3e) {
                                        $c3s = 1;
                                    } else if ($c3s == $c3e) {
                                        $c3s = 0;
                                    }
                                    echo ++$c3s . "</td>";
                                    $c3s++;
                                }
                                if ($current_chapter == "একরামে মুসলিম") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c4s . ", ";
                                    if ($c4s > $c4e) {
                                        $c4s = 1;
                                    } else if ($c4s == $c4e) {
                                        $c4s = 0;
                                    }
                                    echo ++$c4s . "</td>";
                                    $c4s++;
                                }
                                if ($current_chapter == "এখলাছে নিয়ম") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c5s . ", ";
                                    if ($c5s > $c5e) {
                                        $c5s = 1;
                                    } else if ($c5s == $c5e) {
                                        $c5s = 0;
                                    }
                                    echo ++$c5s . "</td>";
                                    $c5s++;
                                }
                                if ($current_chapter == "দাওয়াত ও তবলীগ") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c6s . ", ";
                                    if ($c6s > $c6e) {
                                        $c6s = 1;
                                    } else if ($c6s == $c6e) {
                                        $c6s = 0;
                                    }
                                    echo ++$c6s . "</td>";
                                    $c6s++;
                                }
                                if ($current_chapter == "অহেতুক কথা বার্তা") {
                                    // Print the current date
                                    echo "<td><div $highlight> $current_date\n" . " </div></td>";
                                    echo "<td>  {$persons[$personIndex]}\n" . "</td>";
                                    echo "<td>  " . $current_chapter . "</td>";
                                    echo "<td>" . $c7s . ", ";
                                    if ($c7s > $c7e) {
                                        $c7s = 1;
                                    } else if ($c7s == $c7e) {
                                        $c7s = 0;
                                    }
                                    echo ++$c7s . "</td>";
                                    $c7s++;
                                }
    
    
                                echo "</tr>";
                                  if($count==30){break;}
                            }
                        }
                        echo "</table>";
                        ?>
                </div>
            </div>
        </div>
    </div>

</body>
