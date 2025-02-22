<div?php include '../../conn.php' ; // Include the database connection file ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../../resources/favicon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../../../css/home.css">
        <title>Social media</title>
    </head>

    <body>
        <nav class="navbar">
            <a href="../../home.php" class="logo"><img src="../../../images/logopal.png" alt="Puberty Pal Logo"></a>
            <ul class="nav-links">
                <li>
                    <a href="../../home.php">Home</a>
                    <ul class="submenu">
                        <li><a href="../../journey.php">Journey</a></li>
                        <li><a href="../../parents.php">Parents</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../../resources.php">Resource Hub</a>
                    <ul class="submenu">
                        <li><a href="../../resources.php">All Resources</a></li>
                        <li><a href="../../topics.php">Puberty Topics</a></li>
                    </ul>
                </li>
                <li><a href="../../games.php">Games</a></li>
                <li><a href="../../charity.php">Charity</a></li>
                <li><a href="../../aboutus.php">Say Hi!</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>The power of social media</h1>
            <p> Exploring how social media affects teenagers reveals a complex impact on mental health, body image, and
                social skills, highlighting both the risks and benefits of digital connectivity. </p>


            <div class="physical-images-container">
                <img src="../../../images/soc.jpg" alt="social media">
            </div>
            <ul>
                <li>
                    <h3>Social skills and relationships</h3>
                    <p>The rise in social media use is weakening basic social skills by reducing face-to-face
                        interactions,
                        which are essential for understanding emotional cues and building meaningful relationships. This
                        shift can lead to difficulties in real-life communication, resulting in shallower connections
                        and
                        misunderstandings.</p>
                </li>
                <li>
                    <h3>Academic performance</h3>
                    <p>Social media can significantly distract teenagers, fragmenting their focus and reducing their
                        ability
                        to concentrate on homework and assignments. This distraction often leads to procrastination,
                        incomplete work, and lower academic performance, while also adding stress from balancing online
                        and
                        academic demands.</p>
                </li>
                <li>
                    <h3>Social comparison</h3>
                    <p>Exposure to idealized portrayals on social media leads to comparing our achievements with others'
                        seemingly perfect lives, which can foster feelings of inadequacy and self-doubt. This comparison
                        often results in unrealistic expectations and increased stress, impacting overall self-esteem
                        and
                        satisfaction.</p>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>Follow a healthy diet</h3>
                    <p>Including nutritious food in your diet helps maintain energy and mood</p>
                </li>
                <li>
                    <h3>Exercise daily</h3>
                    <p>Engaging in physical activities keeps the brain fresh and active, this helps manage anxiety,
                        stress
                        and is an instant mood booster</p>
                </li>
            </ul>

        </div>
        <section class="video-section">
            <h2>Informative Videos</h2>
            <div class="video-container">
                <<iframe width="560" height="315" src="https://www.youtube.com/embed/Z1BpYDkGoAs?si=_tVk9YtFrjkQ2H2G"
                    frameborder="0" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-QDjx_spkwI?si=2uZWUJNSsQW_dvSk"
                        frameborder="0" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <?php include '../../topicsfooter.php'; ?>
    </body>

    </html>