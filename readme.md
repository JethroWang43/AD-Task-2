<a name="readme-top">

<br/>

<br />

<!-- TODO: Change Title to the name of the title of your Project -->
<h3 align="center">Gym Equipment store website</h3>

<!-- TODO: Make a short description -->
<p align="center">
  A Gym Equipment store website that uses the requirements of task 2
</p>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=JethroWang42/AD-Task-2)

[![wakatime](https://wakatime.com/badge/user/ce1ba829-cf0c-415a-907e-955818b3b253/project/da1a3d23-9929-4fef-bc6b-f381a63a69f7.svg)](https://wakatime.com/badge/user/ce1ba829-cf0c-415a-907e-955818b3b253/project/da1a3d23-9929-4fef-bc6b-f381a63a69f7)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->
This project is a PHP-based gym equipment store that highlights the use of arrays, associative arrays (dictionaries), and functions to manage and display a variety of gym equipment.  
The homepage includes a meal suggestion feature that uses conditional statements to recommend meals based on the time of day, aligning with the fitness-focused theme.  
Users can filter equipment based on type: Cardio, Strength, or Leg—demonstrating dynamic content filtering using PHP logic.  
A "Next Page" button allows smooth navigation to another section, and the project is organized with a modular folder structure for components, assets, handlers, and pages.


### Key Components

<!-- TODO: List of Key Components -->
- Component-based design (Header, Footer, Equipment Filter, Equipment List, Meal Suggestion, Goal Form)
- Uses handlers to manage page logic
- Uses arrays and associative arrays (dictionaries) to store and display product information
- Dynamic filtering of equipment based on type using PHP logic
- Modular folder structure for better organization

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)


## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Task-2
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   └── js/
├── components/
│   ├── equipment_filter.php
│   ├── equipment_list.php
│   ├── footer.php
│   ├── goal_form.php
│   ├── header.php
│   └── meal_suggestion.php
├── handler/
│   └── equipment_data.php
├── page/
│   └── page1/
│       ├── assets/
│       │   ├── css/
│       │   │   └── style.css
│       │   ├── img/
│       │   └── js/
│       │       └── script.js
│       └── index.php
├── src/
├── utils/
├── vendor/
├── .gitignore
├── bootstrap.php
├── composer.json
├── composer.lock
├── index.php
├── readme.md
└── router.php

```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| W3shcool     | to check and understand the syntax of kotlin                                  | w3schools.com |
| Chatgpt      | to ask about the issue of the program                                         | chatgpt.com   |