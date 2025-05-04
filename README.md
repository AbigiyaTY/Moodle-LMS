<a name="readme-top"></a>

# 📗 Table of Contents

* [📖BG LMS](#about-project)

  * [🛠 Built With](#built-with)

    * [Tech Stack](#tech-stack)
    * [Key Features](#key-features)
* [💻 Getting Started](#getting-started)

  * [Usage](#usage)
* [👥  Author](#author)
* [🤝 Contributing](#contributing)
* [⭐️ Show Your Support](#support)
* [🙏 Acknowledgements](#acknowledgements)
* [❓ FAQ (OPTIONAL)](#faq)
* [📝 License](#license)

# 📖 BG LMS – Brighter Generation Learning Management System <a name="about-project"></a>

> **BG LMS** is a centralized learning management platform built on Moodle 4.5.4+, designed to manage students, teachers, content, and evaluations across multiple learning centers.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

* **Moodle 4.5.4+** (PHP-based LMS) with bundled Apache, MariaDB, and PHP for Windows.
* **H5P** plugin for interactive content modules.
* Custom **role-based access controls** and **conditional activities** for time-based content release.

### Key Features <a name="key-features"></a>

* **Multi-Center Role Management**: Super Administrator, Center Manager, Teacher, and Student roles with scoped permissions.
* **Weekly Course Structure**: Time-scheduled weekly modules including H5P interactive content, quizzes, and assignments.
* **Assignment Workflow & Reporting**: Auto and manual grading, submission feedback, attendance tracking, and center-specific summary reports.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 💻 Getting Started <a name="getting-started"></a>

> BG LMS is provided as a self-contained Windows package—no separate PHP, database, or web server installation is required. Simply download, unzip, and start the bundled stack.

### Usage <a name="usage"></a>

1. Download the Windows ZIP package from the repository’s **Releases** page.
2. Extract the ZIP to your preferred folder.
3. Inside the extracted folder, double-click **Start Moodle.exe** to launch the bundled Apache, MariaDB, and PHP services.
4. Open your browser and navigate to [http://localhost/](http://localhost/) to access your Moodle site.
5. To allow others on your network to connect, have them visit `http://<your-PC-IP>/`, replacing `<your-PC-IP>` with your computer’s LAN address.
6. When finished, double-click **Stop Moodle.exe** to gracefully shut down the server services.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Author <a name="author"></a>
 
 **Abigiya Tadesse**

* GitHub: [@AbigiyaTY](https://github.com/AbigiyaTY)
* Twitter: [@AbigiyaTY](https://twitter.com/AbigiyaTY)
* LinkedIn: [@AbigiyaTY](https://www.linkedin.com/in/AbigiyaTY)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 🤝 Contributing <a name="contributing"></a>

Contributions are welcome! Please open issues and pull requests on the [issues page](../../issues/).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## ⭐️ Show Your Support <a name="support"></a>

If you find BG LMS helpful, give it a ⭐️ on GitHub and share with your network!

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 🙏 Acknowledgements <a name="acknowledgements"></a>

* Moodle community for the core LMS platform
* H5P contributors for interactive content modules
* Open-source community for inspiring educational tools

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## ❓ FAQ <a name="faq"></a>

* **How do I add a new center?**

  * As a Super Administrator, navigate to **Site administration > Users > Accounts > Add a new center**.

* **Can I customize the weekly schedule?**

  * Yes, go to **Course settings > Course format > Weekly format**, and adjust the release dates.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 📝 License <a name="license"></a>

This project is [MIT](./MIT.md) licensed. You can set it up quickly by using GitHub’s MIT license template.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
