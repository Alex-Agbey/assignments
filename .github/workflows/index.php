<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 20px; }
        h1 { color: #2c3e50; border-bottom: 2px solid #2c3e50; }
        h2 { color: #34495e; }
        .section { margin-bottom: 30px; }
    </style>
</head>
<body>
    <h1>Alex Torgboshie</h1>
    <p>Email: gbagolexx@gmail.com | GitHub: github.com/Alex-Agbey</p>

    <div class="section">
        <h2>About Me</h2>
        <p>Aspiring DevOps Engineer passionate about cloud infrastructure and automation.</p>
    </div>

    <div class="section">
        <h2>Skills</h2>
        <ul>
            <li>AWS (EC2, S3, ECS, Elastic Beanstalk)</li>
            <li>Docker & Kubernetes</li>
            <li>GitHub Actions CI/CD</li>
            <li>Linux & Bash</li>
        </ul>
    </div>

    <div class="section">
        <h2>Projects</h2>
        <ul>
            <li>Deployed containerized apps to ECS Fargate via GitHub Actions OIDC</li>
            <li>Built CI/CD pipelines with SonarQube and Trivy security scanning</li>
        </ul>
    </div>

    <div class="section">
        <h2>Education</h2>
        <p> Bachelor of Science in Computer Science — University of Ghana — 2020</p>
    </div>

    <?php
        echo "<p><small>Deployed on: " . date('Y-m-d H:i:s') . " | Server: " . $_SERVER['SERVER_SOFTWARE'] . "</small></p>";
    ?>
</body>
</html>