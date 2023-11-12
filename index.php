<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOEL OWEN KAKHOBWE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>NOEL KAKHOBWE PORTIFOLIO</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/What I Do">What I Do</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="hero-image.jpg" alt="Hero image">
            <h1>Welcome to NOEL OWEN KAKHOBWE PORTIFOLIO</h1>
            <p>Keep your moments in pixels and updated.<br>
              Hello, I'm Noel Owen Kakhobwe.
              <br>
              Software Engineer, Business Intelligence Consultant & Entrepreneur.
               </p>
        </section>

        <section class="posts">
            <h2>Latest Posts</h2>
            <?php
                // Connect to the database
                $db = new PDO('mysql:host=localhost;dbname=myblog', 'username', 'password');

                // Get the latest posts
                $sql = 'SELECT * FROM posts ORDER BY created_at DESC LIMIT 3';
                $statement = $db->prepare($sql);
                $statement->execute();
                $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

                // Loop through the posts and display them
                foreach ($posts as $post) {
                    echo '<article>';
                        echo '<h3><a href="/post/' . $post['id'] . '">' . $post['title'] . '</a></h3>';
                        echo '<p>' . $post['excerpt'] . '</p>';
                        echo '<a href="/post/' . $post['id'] . '">Read more &raquo;</a>';
                    echo '</article>';
                }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Noel Owen Keysta</p>
    </footer>
</body>
</html>
