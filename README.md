# 🐾 Animal Atlas & Encyclopedia

**A Comprehensive Wildlife Information Platform**

## 📋 Project Overview

The Animal Atlas & Encyclopedia is an interactive web application that serves as a comprehensive resource for wildlife education and conservation awareness. This project provides detailed information about various animal species, their habitats, conservation status, and includes engaging features like quizzes, blogs, and educational resources.

## 🎓 Academic Information

- **Institution:** Koforidua Technical University
- **Program:** B.Tech Computer Science
- **Group:** 6A
- **Project Type:** College Project

## ✨ Features

### 🏠 Main Sections

1. **Animal Categories**
   - 🦁 **Mammals** - Comprehensive profiles of mammalian species
   - 🐦 **Birds** - Detailed bird species information with images
   - 🐍 **Reptiles & Amphibians** - Cold-blooded vertebrates section
   - 🐠 **Sea Creatures** - Marine life and aquatic animals

2. **Habitat Explorer**
   - 🌊 **Ocean** - Marine ecosystems and deep-sea environments
   - 🏜️ **Desert** - Arid climate adaptations and desert wildlife
   - 🌳 **Forest/Tropics** - Rainforest biodiversity and tropical species
   - ❄️ **Arctic** - Polar regions and cold-climate adaptations

3. **Conservation Center**
   - 📊 Endangered and extinct species information
   - 🧬 Hybrid animals and cloning information
   - ⚠️ Wildlife threats and conservation efforts
   - 🌍 Global conservation initiatives
   - 💰 Donation system for conservation support

4. **Interactive Resources**
   - 🎯 **Fun Quiz** - Test your wildlife knowledge with interactive questions
   - 📚 **Facts & Jokes** - Educational content with entertainment
   - 📝 **Blog** - Articles and wildlife stories covering various topics

### 🔧 Technical Features

- **Responsive Design** - Works on desktop, tablet, and mobile devices
- **Interactive Modals** - Pop-up information displays for animals and habitats
- **Image Carousels** - Sliding image galleries for habitats
- **Search Functionality** - Find specific animals and information
- **Database Integration** - MySQL database for dynamic content
- **Read More/Less** - Expandable content sections
- **Mobile Navigation** - Hamburger menu for mobile devices
- **Dynamic Content** - PHP-generated content with database integration

## 🛠️ Technology Stack

### Frontend
- **HTML5** - Semantic markup and structure
- **CSS3** - Styling, animations, and responsive design
- **JavaScript** - Interactive functionality and DOM manipulation

### Backend
- **PHP** - Server-side programming and database connectivity
- **MySQL** - Database management system

### Assets
- **Images** - High-quality wildlife and habitat photographs
- **Icons** - Custom and web icons for navigation and content
- **Videos** - Educational wildlife content

## 📁 Project Structure

```
College-Project/
├── 📄 index.php                 # Main homepage with navigation
├── 📄 search.php                # Search functionality
├── 📄 dbh.php                   # Database connection handler
├── 📄 script.js                 # Main JavaScript functionality
├── 📄 style.css                 # Main stylesheet
├── 📁 list/                     # Animal categories
│   ├── 📄 mammals.html         # Mammals information
│   ├── 📄 bird.php             # Birds information
│   ├── 📄 reptiles.html        # Reptiles & amphibians
│   ├── 📄 fish.html            # Sea creatures
│   ├── 📄 list.js              # List functionality
│   └── 📁 list_image/          # Animal category images
├── 📁 habitat/                  # Habitat sections
│   ├── 📄 ocean.php            # Ocean habitats
│   ├── 📄 desert.html          # Desert environments
│   ├── 📄 tropics.php          # Forest/tropical habitats
│   ├── 📄 arctic.html          # Arctic/polar regions
│   ├── 📄 artic.css            # Arctic styling
│   ├── 📄 artic.js             # Arctic interactions
│   ├── 📄 desert.css           # Desert styling
│   ├── 📄 desert.js            # Desert interactions
│   ├── 📄 ocean.css            # Ocean styling
│   ├── 📄 ocean.js             # Ocean interactions
│   ├── 📄 tropics.css          # Tropical styling
│   ├── 📄 tropics.js           # Tropical interactions
│   └── 📁 habitat_images/      # Habitat images
├── 📁 resources/                # Educational resources
│   ├── 📄 quiz.html            # Interactive quiz
│   ├── 📄 quiz.js              # Quiz functionality
│   ├── 📄 quiz.css             # Quiz styling
│   ├── 📄 facts-jokes.html     # Facts and jokes
│   └── 📄 facts.css            # Facts styling
├── 📁 blogfiles/                # Blog articles
│   ├── 📄 blog2.html           # Main blog page
│   ├── 📄 blog2 style.css      # Blog styling
│   ├── 📄 fastest animals.php  # Fastest animals article
│   ├── 📄 fast.css             # Fast animals styling
│   ├── 📄 weired animals.php   # Weird animals article
│   ├── 📄 weired.css           # Weird animals styling
│   ├── 📄 cute.php             # Cute but dangerous animals
│   ├── 📄 cute.css             # Cute animals styling
│   ├── 📄 wild.php             # Wild cousins of pets
│   ├── 📄 wild.css             # Wild animals styling
│   ├── 📄 animal superpowers.html
│   ├── 📄 animals from every continent.html
│   ├── 📄 Canivore omnivore.html
│   ├── 📄 Elephants and other smart animals .html
│   ├── 📄 Mythical creatures .html
│   ├── 📄 Ocean odditties.html
│   ├── 📄 Rainforest rumble.html
│   └── 📁 images/              # Blog images
├── 📁 conserve/                 # Conservation section
│   ├── 📄 conservation.html    # Conservation information
│   ├── 📄 conservation.css     # Conservation styling
│   ├── 📄 conservation.js      # Conservation interactions
│   ├── 📄 donate.php           # Donation system
│   ├── 📄 donate.css           # Donation styling
│   └── 📄 process_donation.php # Donation processing
├── 📁 gallery/                  # Media gallery
├── 📁 images/                   # General site images
└── 📁 animal_site/              # Database files
    ├── 📄 birds.frm            # Birds table structure
    ├── 📄 birds.ibd            # Birds table data
    ├── 📄 blogs.frm            # Blogs table structure
    ├── 📄 blogs.ibd            # Blogs table data
    ├── 📄 donations.frm        # Donations table structure
    ├── 📄 donations.ibd        # Donations table data
    ├── 📄 habitat.frm          # Habitat table structure
    ├── 📄 habitat.ibd          # Habitat table data
    └── 📄 db.opt               # Database options
```

## 🚀 Getting Started

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Modern web browser

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/llPsychoFish/College-Project.git
   cd College-Project
   ```

2. **Set up the database**
   - Import the database schema from `animal_site/` directory
   - Configure database connection in `dbh.php`

3. **Configure web server**
   - Point document root to project directory
   - Ensure PHP and MySQL are properly configured

4. **Access the application**
   - Open `http://localhost/College-Project/index.php` in your browser

## 🎯 Key Functionality

### Animal Information System
- Detailed species profiles with scientific names
- High-quality images and descriptions
- Habitat and behavioral information
- Conservation status indicators

### Interactive Learning
- Knowledge-testing quizzes with scoring system
- Educational facts and trivia
- Engaging blog content about wildlife
- Interactive habitat exploration

### Conservation Awareness
- Information about endangered and extinct species
- Threats to wildlife and ecosystems
- Conservation success stories and efforts
- Donation system for conservation support

### Blog Content
- Fastest animals in the world
- Weirdest animals you've never heard of
- Cute but dangerous baby animals
- Wild cousins of domestic pets
- Animal superpowers and abilities
- Animals from every continent
- Carnivore vs omnivore information
- Elephants and other intelligent animals
- Mythical creatures
- Ocean oddities
- Rainforest biodiversity

## 👥 Group 6A Members

- **Arnold Sampson** - Lead Programmer & Project Coordinator
  - Frontend development and user interface design
  - Backend PHP programming and database integration
  - Project architecture and technical leadership
- **Amegashitsi Jackson** - Chief Editor & Researcher
  - Content editing and quality assurance
  - Wildlife research and fact-checking
  - Educational resource development
- **Aderkotey Foster** - Blog Creator
  - Developed and authored the blog section
  - Curated wildlife stories and articles
- **Michelle Baffoe** - Habitat Specialist & UI/UX Designer
  - Developed and designed habitat exploration sections
  - Designed user interface and user experience for habitat pages
  - Implemented responsive design and interactive elements

## 🤝 Contributing

This is an academic project for educational purposes. Contributions and suggestions are welcome for learning and improvement.

## 📜 License

This project is developed for educational purposes as part of the B.Tech Computer Science program at Koforidua Technical University.

## 📞 Contact

For questions or feedback regarding this project, please contact Group 6A through the appropriate academic channels.

---

**© 2025 Animal Atlas | Group 6A Project**
