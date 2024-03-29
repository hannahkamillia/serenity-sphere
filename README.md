# Final Report
A complete model-view-controller web application project, linking users to mental health resources.

## Group Members
- Hannah Kamillia Binti Hamidi (2113570)
- Suraya Nabilah Binti Mohd Aini (2118090)
- Nur Athirah Binti Mohd Abu Bakar (2110508)
- Nor Ani Jannah Binti Ahmad Zaini (2114802)
- Nur Fatin Husna Binti Zolkopli (2110584)
- Nayli Syazreen binti Shaiful Hizam (2111770)

## Project Title
Serenity Sphere

<br>

## Introduction
Improving and maintaining our mental well-being is an essential aspect of our daily existence. As the number of students or adults facing mental health issues grows more prevalent, substantial efforts have been taken to enhance the accessibility of such crucial resources. This notably extends to the digital realm, where developers and governments have been making these resources available online; enabling individuals to seek mental health assistance on the web. Whether through virtual sessions with therapists, counselling services, or readily accessible written materials, this approach offers a valuable outlet for those seeking support whilst removing the necessity to be physically present at a specific location.

## Objective
This project aims to ease the user's journey in finding help for their mental health. Thus, the 'SerenitySphere' web application seeks to provide users with the necessary resources such as to contact, enquire and ultimately locate available therapists around the area. With this, users can use SerenitySphere as their go-to web application to assist them in the important aspects of their mental health. More specifically, this project links with SDG 3.4, which states, "By 2030, reduce by one third premature mortality from non-communicable diseases through prevention and **treatment and promote mental health and well-being."**

<br>

## Features and Functionalities

**1. GENERAL VIEW**

1.1 Login Account
- The system allows the user to log in as a Serenity Sphere staff or admin, to view the backend of the application. 

1.2 Register Account
- Coupled with 1.1, the system allows users to register for an account if they do not have one to begin with. 

<br>

**2. USER VIEW**

2.1  Home
- This serves as the starting point, offering an overview or welcome page for users to access various sections of the website.
- Users are also allowed to sign in or register for an account for their details to be saved to the database.

2.2 About Us
- SerenitySphere's "About Us" section provides an in-depth review of the platform, outlining its fundamental values, objectives, and vision to improve mental health.
- Provides a detailed summary of the business's mental health initiatives and emphasises its commitment to creating a welcoming, safe, and friendly space.
- 'Join Us' form to allow future therapists who want to work with Serenity Sphere.

2.3 Feedback
- Users can submit their experiences, recommendations, and complaints about SerenitySphere's services in the "Feedback" area.
- Promotes a community-driven, participatory approach to platform improvement, creating an environment where user input directly influences continuous improvements.

2.4 Contact Us + FAQs
- "FAQ" section serves as a knowledge base for frequent questions and issues users may have regarding its features, services, and mental health resources.
- Offers thorough, clear, and concise responses, giving users the knowledge they need to use the platform efficiently.
- Users can submit the form provided to ask any other (unanswered) queries they have

2.5 Make an Appointment
- A page where users can reach out to Serenity Sphere's mental health services and customise their journey. 
- Users can submit the form provided to make an appointment with a specific therapist, detailing their basic information, selected treatment and appointment date/time.

<br>

**3. ADMIN VIEW**

3.1 Manage Booking Appointment
- Only the admin can read, update, delete the booking appointment form filled out by the user.

3.2 Manage Employee Details
-  Only the admin can read, update, delete the employee form filled out by the user.


<br>

## Sequence Diagram
Provided below is the sequence diagram that represents the user interaction with our web application:
![Sequeance Diagram Web Apps-Sequence Diagram Web App drawio](https://github.com/hannahkamillia/serenity-sphere/assets/122007826/fcccaf3f-f904-4e24-9968-578e2f9ebbdb)



<be>

## Project System Designs
**Home Page**
There is the welcoming message. There are two button which is ‘Join Us’, to log in to the system and button ‘Feedback’ to user see the testimonial or fill in the feedback form.

- Home page with welcoming message and 'Join Us' button
![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/e5ec5bcb-c9b7-445e-b187-42d6b9759285)

- Home page with 'Feedback' button
![Screenshot 2024-01-17 225408](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/cfcf7013-720b-4303-b303-cf7eba745ac0)


<be>

- The navigation bar and the footer remains the same for every page in the web app
![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/b31db42d-a1c8-4b36-9411-d9cc99e6060a)
  
<br>

**About Us**
<br>
Describe summary about the Serenity Sphere such as the introduction, objectives and also the gallery part of the serenity sphere center. There is also the join us form provided if there are anyone who want to work with Serenity Sphere. 

- Summary about the Serenity Sphere
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/9d88b7cd-4b3b-422d-aed7-734500cdea42)


- Gallery
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/4451239c-20de-4112-b5e8-300558b38f33)

- The form to join Serenity Sphere as a worker
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/41fbaa4e-eb07-403e-8e7d-977c421e65c4)

<br>

**Feedback**
<br>
Users can submit their experiences, recommendations or any complaints about Serenity Sphere’s services. It also shows the testimonials from the user who has submitted the feedback form.

- Feedback form
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/b81dafbf-c0da-45be-a203-13ef1cc64b26)

- Testimonial
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/d61dfb8b-5088-44f0-863e-21d88481140f)


<br>

**Contact Us + FAQs**
<br>
Provides the details about the Serenity Sphere such as our address in Google Maps, phone number and emails. This page also provides FAQs from the user. New user can refer this FAQs if there is any inquiry. If the user wants to ask a question that hasn't been asked yet, there is the form provided for them to fill in the question. 

- Contact details and contact us form
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/08ab6565-b8f4-480b-afda-85ef665fbe57)

- FAQs
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/04a0fc89-d356-41b0-b6b0-80b0312757d6)
  

<br>

**Login & Register Account**
<br>
The system allows the user to log in the website as a admin or customer. The admin can view the backend of the application while the customer only can see the frontend of the application. For the registration, if both of them do not have any account yet, they have to register first.
<br><br>

- Login
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/ba02bc77-d63b-402f-b370-c95f199e4fa7)
  

- Register
  ![image](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/f2363d1d-e316-4005-890b-f209b4b736ec)

**Home page admin**
- Admin has another view because they can update, delete, read the backend of the website such as the form filled out by the user.
  ![WhatsApp Image 2024-01-17 at 23 07 54](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/f0c378e7-c708-4022-973a-c95bc3dbd7a3)


**Manage Appointment Details**
- Only the admin can create, update and delete the patient bookings details.
  ![WhatsApp Image 2024-01-17 at 23 09 21](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/ae0964c5-bbee-4196-b67d-c2e74df90be2)



<br>

**Manage Employee Details**
- Only the admin can read, update and delete the job applications.
![WhatsApp Image 2024-01-17 at 23 10 33](https://github.com/hannahkamillia/serenity-sphere/assets/154809072/44f80cf9-6097-4503-a1bb-5a826044a684)



<br>

## Challenges During Development

- Working in a 6-member group evoked some challenges in regards to the communication and information transparency amongst members. This was apparent especially during task allocation and updating each other on our individual progress.

- Since it was all of the members’ first attempt coding with Laravel, learning its basic concepts, as well as using Git Repositories, a lot of hours were put into learning the ropes of it all. 

- Despite the convenience of ‘pulling’ and ‘pushing’ our source codes during development, it was difficult to sync our changes when multiple members were simultaneously working on the repository (from different devices). 

- Even when using a pre-downloaded framework as our foundation, there was still some difficulty at first when navigating around the different files and components used in the source code.


<br>

## References
- [Link to SerenitySphere's mockups designs](https://app.moqups.com/hsclsyoetv4F2fOAV9F0loAX2XSJlMCd/view/page/ad96b0eab](https://app.moqups.com/hsclsyoetv4F2fOAV9F0loAX2XSJlMCd/view/page/a54eb25ae))

- Please find the [Canva Link](https://www.canva.com/design/DAF4au77aAg/SvurdfBeFNhwF4VT1-EWAQ/edit?utm_content=DAF4au77aAg&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton) for our project proposal presentation.

- Thank you!
