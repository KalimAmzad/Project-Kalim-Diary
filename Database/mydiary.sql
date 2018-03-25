-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 08:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `catagory` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `title`, `catagory`, `author`, `image`, `post`) VALUES
(25, 'October-02-2017 10:18:29', 'The Basics of C Programming', 'C', 'kalim amzad', 'c-programming-example-code.jpg', '						The C programming language is a popular and widely used programming language for creating computer programs. Programmers around the world embrace C because it gives maximum control and efficiency to the programmer.\r\nIf you are a programmer, or if you are interested in becoming a programmer, there are a couple of benefits you gain from learning C\r\n\r\n<img class="media-hero" width="377 " height="229" src="http://s.hswstatic.com/gif/c-exec.gif" data-src="http://s.hswstatic.com/gif/c-exec.gif" alt="This animation shows the execution of a simple C program. By the end of this article you will understand how it works!" title="This animation shows the execution of a simple C program. By the end of this article you will understand how it works!">\r\n<h3>What is C?</h3>\r\n<p>\r\nC is a computer programming language. That means that you can use C to create lists of instructions for a computer to follow. C is one of thousands of programming languages currently in use. C has been around for several decades and has won widespread acceptance because it gives programmers maximum control and efficiency. C is an easy language to learn. It is a bit more cryptic in its style than some other languages, but you get beyond that fairly quickly.</p>\r\n<img width="50% " height="465" src="http://s.hswstatic.com/gif/c-compile.gif" data-src="http://s.hswstatic.com/gif/c-compile.gif" alt="" title="">\r\n\r\n<p>C is what is called a compiled language. This means that once you write your C program, you must run it through a C compiler to turn your program into an executable that the computer can run (execute). The C program is the human-readable form, while the executable that comes out of the compiler is the machine-readable and executable form. What this means is that to write and run a C program, you must have access to a C compiler. If you are using a UNIX machine (for example, if you are writing CGI scripts in C on your host''s UNIX computer, or if you are a student working on a lab''s UNIX machine), the C compiler is available for free. It is called either "cc" or "gcc" and is available on the command line. If you are a student, then the school will likely provide you with a compiler -- find out what the school is using and learn about it. If you are working at home on a Windows machine, you are going to need to download a free C compiler or purchase a commercial compiler. A widely used commercial compiler is Microsoft''s Visual C++ environment (it compiles both C and C++ programs). Unfortunately, this program costs several hundred dollars. If you do not have hundreds of dollars to spend on a commercial compiler, then you can use one of the free compilers available on the Web.\r\n</p>\r\n<h3>The simplest C program</h3>\r\n<p>Let''s start with the simplest possible C program and use it both to understand the basics of C and the C compilation process. Type the following program into a standard text editor (vi or emacs on UNIX, Notepad on Windows or TeachText on a Macintosh). Then save the program to a file named samp.c. If you leave off .c, you will probably get some sort of error when you compile it, so make sure you remember the .c. Also, make sure that your editor does not automatically append some extra characters (such as .txt) to the name of the file. Here''s the first program:</p>\r\n<pre>\r\n#include &lt;stdio.h&gt;\r\nint main()\r\n{\r\n    printf("This is output from my first program!\\n");\r\n    return 0;\r\n}\r\n</pre>	\r\nWhen executed, this program instructs the computer to print out the line "This is output from my first program!" -- then the program quits. You can''t get much simpler than that!			'),
(26, 'October-02-2017 10:36:28', 'Basics of C++', 'C++', 'kalim amzad', 'C++.png', '\r\n<h3>Overview</h3>								\r\nC++ is a computer programming language developed in 1980 by Bjarne Stroustrup at the Bell Telephone Laboratories. C++ is an Object Oriented Programming Language, which follow oops concept like, inheritance, encapsulation, abstraction and polymorphism.\r\n\r\n<h4>Where we use C++ Language</h4>\r\n\r\nC Language is mainly used for;\r\n\r\nDesign Operating system\r\nDesign Language Compiler\r\nDesign Database\r\nUtilities\r\nApplication Software\r\n\r\n\r\n<h4>Applications of C++</h4>\r\n\r\nMainly C++ Language is used for Develop Desktop application and system software. Some application of C++ language are given below.\r\n\r\n1. For Develop Graphical related application like computer and mobile games.\r\n2. To evaluate any kind of mathematical equation use C++ language.\r\n3. C++ Language are also used for design OS. Like window xp.4.\r\n4. Google also use C++ for Indexing\r\n5. Few parts of apple OS X are written in C++ programming language.\r\n6. Internet browser Firefox are written in C++ programming language\r\n7. All major applications of adobe systems are developed in C++ programming language. Like Photoshop, ImageReady, Illustrator and Adobe Premier.\r\n8. Some of the Google applications are also written in C++, including Google file system and Google Chromium.\r\n9. C++ are used for design database like MySQL.						'),
(27, 'October-02-2017 10:41:40 Monday', 'Stack', 'Stack', 'kalim amzad', 'stack.JPG', '	Stack is linear data structure. In stack addition of new data item and deletion of already existing data item is done from only one end, known as top. Working of stack on the basis of Last-in-First-out (LIFO) principal, it means last entered item remove first.							\r\n\r\n<h3>Real life example of stack<h3>\r\n\r\nA most popular example of stack is plates in marriage party. Fresh plates are pushed onto to the top and popped from the top.	\r\n<img src="images/programming/stack-example.png" alt="stack real life example" title="stack">\r\n\r\n\r\n<h3>Stack Operation</h3>\r\n\r\nIn stack data structure mainly perform two operation; push and pop\r\n\r\n<b>pop:</b> In case of stack deletion of any item from stack is called pop.\r\n<b>push:</b> In case of stack Insertion of any item in stack is called push.						'),
(28, 'October-02-2017 10:45:31 Monday', 'What is an Arduino?', 'Arduino', 'kalim amzad', 'arduino.JPG', 'Introduction\r\nArduino is an open-source platform used for building electronics projects. Arduino consists of both a physical programmable circuit board (often referred to as a microcontroller) and a piece of software, or IDE (Integrated Development Environment) that runs on your computer, used to write and upload computer code to the physical board.\r\n\r\nThe Arduino platform has become quite popular with people just starting out with electronics, and for good reason. Unlike most previous programmable circuit boards, the Arduino does not need a separate piece of hardware (called a programmer) in order to load new code onto the board â€“ you can simply use a USB cable. Additionally, the Arduino IDE uses a simplified version of C++, making it easier to learn to program. Finally, Arduino provides a standard form factor that breaks out the functions of the micro-controller into a more accessible package.\r\n\r\nThe Uno is one of the more popular boards in the Arduino family and a great choice for beginners. Weâ€™ll talk about whatâ€™s on it and what it can do later in the tutorial.\r\n\r\n<h3>You Will Learn</h3>\r\n\r\nIn this tutorial, weâ€™ll go over the following:\r\n\r\n1. What projects can be accomplished using an Arduino\r\n2. What is on the typical Arduino board and why\r\n3. The different varieties of Arduino boards\r\n4. Some useful widgets to use with your Arduino								\r\n					\r\n<h3>What Does it Do?</h3>\r\nThe Arduino hardware and software was designed for artists, designers, hobbyists, hackers, newbies, and anyone interested in creating interactive objects or environments. Arduino can interact with buttons, LEDs, motors, speakers, GPS units, cameras, the internet, and even your smart-phone or your TV! This flexibility combined with the fact that the Arduino software is free, the hardware boards are pretty cheap, and both the software and hardware are easy to learn has led to a large community of users who have contributed code and released instructions for a huge variety of Arduino-based projects.\r\n\r\nFor everything from robots and a heating pad hand warming blanket to honest fortune-telling machines, and even a Dungeons and Dragons dice-throwing gauntlet, the Arduino can be used as the brains behind almost any electronics project.		'),
(29, 'October-02-2017 10:51:20 Monday', 'What is Big Data?', 'Bigdata', 'kalim amzad', 'Big_data_image.jpg', 'Big data describes a holistic information management strategy that includes and integrates many new types of data and data management alongside traditional data.\r\n\r\nBig data has also been defined by the four Vs:\r\n\r\n<b>Volume:</b> The amount of data. While volume indicates more data, it is the granular nature of the data that is unique. Big data requires processing high volumes of low-density, unstructured Hadoop dataâ€”that is, data of unknown value, such as Twitter data feeds, click streams on a web page and a mobile app, network traffic, sensor-enabled equipment capturing data at the speed of light, and many more. It is the task of big data to convert such Hadoop data into valuable information. For some organizations, this might be tens of terabytes, for others it may be hundreds of petabytes.\r\n<b>Velocity:</b> The fast rate at which data is received and perhaps acted upon. The highest velocity data normally streams directly into memory versus being written to disk. Some Internet of Things (IoT) applications have health and safety ramifications that require real-time evaluation and action. Other internet-enabled smart products operate in real time or near real time. For example, consumer eCommerce applications seek to combine mobile device location and personal preferences to make time-sensitive marketing offers. Operationally, mobile application experiences have large user populations, increased network traffic, and the expectation for immediate response.\r\n<b>Variety: <b>. New unstructured data types. Unstructured and semi-structured data types, such as text, audio, and video require additional processing to both derive meaning and the supporting metadata. Once understood, unstructured data has many of the same requirements as structured data, such as summarization, lineage, auditability, and privacy. Further complexity arises when data from a known source changes without notice. Frequent or real-time schema changes are an enormous burden for both transaction and analytical environments.\r\n<b>Value:</b> Data has intrinsic valueâ€”but it must be discovered. There are a range of quantitative and investigative techniques to derive value from dataâ€”from discovering a consumer preference or sentiment, to making a relevant offer by location, or for identifying a piece of equipment that is about to fail. The technological breakthrough is that the cost of data storage and compute has exponentially decreased, thus providing an abundance of data from which statistical analysis on the entire data set versus previously only sample. The technological breakthrough makes much more accurate and precise decisions possible. However, finding value also requires new discovery processes involving clever and insightful analysts, business users, and executives. The real big data challenge is a human one, which is learning to ask the right questions, recognizing patterns, making informed assumptions, and predicting behavior.								\r\n							'),
(30, 'October-02-2017 11:02:14 Monday', 'Introduction to Raspberry pi', 'Raspberry pi', 'kalim amzad', 'raspberry_pi.JPG', '	A Raspberry Pi is a credit card-sized computer originally designed for education, inspired by the 1981 BBC Micro. Creator Eben Upton''s goal was to create a low-cost device that would improve programming skills and hardware understanding at the pre-university level. But thanks to its small size and accessible price, it was quickly adopted by tinkerers, makers, and electronics enthusiasts for projects that require more than a basic microcontroller (such as Arduino devices).\r\n\r\nThe Raspberry Pi is slower than a modern laptop or desktop but is still a complete Linux computer and can provide all the expected abilities that implies, at a low-power consumption level.\r\n\r\n<h3>Is the Raspberry Pi open hardware?</h3>\r\n\r\nThe Raspberry Pi is open hardware, with the exception of the primary chip on the Raspberry Pi, the Broadcomm SoC (System on a Chip), which runs many of the main components of the boardâ€“CPU, graphics, memory, the USB controller, etc. Many of the projects made with a Raspberry Pi are open and well-documented as well and are things you can build and modify yourself.\r\n\r\n<h3>What are the differences in Raspberry Pi models?</h3>\r\n\r\nThe Raspberry Pi Foundation has just recently released a new model, the Raspberry Pi 2, which supersedes some of the previous boards, although the older boards will still be produced as long as there is a demand for them. It is generally backwards compatible with previous versions of the board, so any tutorials or projects you see which were built for a previous version of the board should still work.\r\n\r\nThere are a two Raspberry Pi models, the A and the B, named after the aforementioned BBC Micro, which was also released in a Model A and a Model B. The A comes with 256MB of RAM and one USB port. It is cheaper and uses less power than the B. The current model B comes with a second USB port, an ethernet port for connection to a network, and 512MB of RAM.\r\n\r\nThe Raspberry Pi A and B boards been upgraded to the A+ and B+ respectively. These upgrades make minor improvements, such as an increased number of USB ports and improved power consumption, particularly in the B+. The A+ and B+ have been reviewed on Opensource.com here.\r\n\r\n<h3>What kind of operating system does the Raspberry Pi run?</h3>\r\n\r\nThe Raspberry Pi was designed for the Linux operating system, and many Linux distributions now have a version optimized for the Raspberry Pi.\r\n\r\nTwo of the most popular options are Raspbian, which is based on the Debian operating system, and Pidora, which is based on the Fedora operating system. For beginners, either of these two work well; which one you choose to use is a matter of personal preference. A good practice might be to go with the one which most closely resembles an operating system youâ€™re familiar with, in either a desktop or server environment.\r\n\r\nIf you would like to experiment with multiple Linux distributions and aren''t sure which one you want, or you just want an easier experience in case something goes wrong, try NOOBS, which stands for New Out Of Box Software. When you first boot from the SD card, you will be given a menu with multiple distributions (including Raspbian and Pidora) to choose from. If you decide to try a different one, or if something goes wrong with your system, you simply hold the Shift key at boot to return to this menu and start over.\r\n\r\nThere are, of course, lots of other choices. OpenELEC and RaspBMC are both operating system distributions based on Linux that are targeted towards using the Raspberry Pi as a media center. There are also non-Linux systems, like RISC OS, which run on the Pi. Some enthusiasts have even used the Raspberry Pi to learn about operating systems by designing their own.	\r\n\r\n<h3>What are alternatives to the Raspberry Pi?</h3>\r\n\r\nThe Raspberry Pi is not the only small computing device out there. In fact, there are many more options available than we could list here. Weâ€™ve reviewed some of the choices before, here, but letâ€™s talk about some of the ones you may have heard of before.\r\n\r\nThe Arduino is another hobbyist board, which is geared towards those wanting to build out electronics projects. But, while the Raspberry Pi is a fully functional Linux computer, the Arduino is only a microcontroller. This means it does not run an operating system, but instead, runs very specific, small blocks of code written by the person using the device. There are numerous add-on boards that give it more capabilities, but out of the box, itâ€™s less ready-to-go than a Raspberry Pi. Another option is the Beaglebone series of boards, which are more similar to the Raspberry Pi, but a little bit more powerful (and a little bit more costly, too).\r\n\r\nOne advantage of using the Raspberry Pi over some other alternatives is the size of the community. If you have a question regarding a project you are working on, there are a lot of people who might be able to help you because of the large reach of the community.						\r\n							\r\n<h3>Where can I learn more?</h3>\r\n\r\nWe have covered a number of projects which make use of the Raspberry Pi for learning, teaching, conducting research, and just for fun. Here are a few of our favorites:\r\n\r\nRead about Matt Jadud''s experience learning and using the Occidentalis Linux distribution on his Raspberry Pi.\r\n\r\nHear from Luis IbÃ¡Ã±ez about Coder, a project from Google to use the Raspberry Pi to teach web programming to beginners and kids.\r\n\r\nLearn how SUNY Albany is using the Raspberry Pi as an alternative to textbooks for teaching college students.\r\n\r\nHear firsthand, from young maker Lauren Egts, about how the Raspberry Pi has helped her learn to build cool things.\r\nExplore the seven favorite Raspbery Pi projects from Ruth Suehle, author of the book Raspberry Pi Hacks.\r\n\r\nSee how the Raspberry Pi is being used to light up a juggler''s performance.\r\n\r\nLearn how National Geographic Explorers are bringing the Raspberry Pi to the wilderness to gather data for conservation'),
(31, 'October-02-2017 11:09:50 Monday', 'Basics of Java', 'JAVA', 'kalim amzad', 'Java-Tutorial.png', 'Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. \r\n								\r\nJava programming language was originally developed by Sun Microsystems which was initiated by James Gosling and released in 1995 as core component of Sun Microsystems'' Java platform (Java 1.0 [J2SE]).\r\n\r\nThe latest release of the Java Standard Edition is Java SE 8. With the advancement of Java and its widespread popularity, multiple configurations were built to suit various types of platforms. For example: J2EE for Enterprise Applications, J2ME for Mobile Applications.\r\n\r\nThe new J2 versions were renamed as Java SE, Java EE, and Java ME respectively. Java is guaranteed to be Write Once, Run Anywhere.\r\n\r\n<h3>Java is âˆ’</h3>\r\n\r\n<b>Object Oriented âˆ’</b> In Java, everything is an Object. Java can be easily extended since it is based on the Object model.\r\n\r\n<b>Platform Independent âˆ’</b> Unlike many other programming languages including C and C++, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code. This byte code is distributed over the web and interpreted by the Virtual Machine (JVM) on whichever platform it is being run on.\r\n\r\n<b>Simple âˆ’</b> Java is designed to be easy to learn. If you understand the basic concept of OOP Java, it would be easy to master.\r\n\r\n<b>Secure âˆ’</b> With Java''s secure feature it enables to develop virus-free, tamper-free systems. Authentication techniques are based on public-key encryption.\r\n\r\n<b>Architecture-neutral âˆ’</b> Java compiler generates an architecture-neutral object file format, which makes the compiled code executable on many processors, with the presence of Java runtime system.\r\n\r\n<b>Portable âˆ’</b> Being architecture-neutral and having no implementation dependent aspects of the specification makes Java portable. Compiler in Java is written in ANSI C with a clean portability boundary, which is a POSIX subset.\r\n\r\n<b>Robust âˆ’</b> Java makes an effort to eliminate error prone situations by emphasizing mainly on compile time error checking and runtime checking.\r\n\r\n<b>Multithreaded âˆ’</b> With Java''s multithreaded feature it is possible to write programs that can perform many tasks simultaneously. This design feature allows the developers to construct interactive applications that can run smoothly.\r\n\r\n<b>Interpreted âˆ’</b> Java byte code is translated on the fly to native machine instructions and is not stored anywhere. The development process is more rapid and analytical since the linking is an incremental and light-weight process.\r\n\r\n<b>High Performance âˆ’</b> With the use of Just-In-Time compilers, Java enables high performance.\r\n\r\n<b>Distributed âˆ’</b> Java is designed for the distributed environment of the internet.\r\n\r\n<b>Dynamic âˆ’</b> Java is considered to be more dynamic than C or C++ since it is designed to adapt to an evolving environment. Java programs can carry extensive amount of run-time information that can be used to verify and resolve accesses to objects on run-time.\r\n\r\n<b>History of Java</b>\r\nJames Gosling initiated Java language project in June 1991 for use in one of his many set-top box projects. The language, initially called â€˜Oakâ€™ after an oak tree that stood outside Gosling''s office, also went by the name â€˜Greenâ€™ and ended up later being renamed as Java, from a list of random words.\r\n\r\nSun released the first public implementation as Java 1.0 in 1995. It promised Write Once, Run Anywhere (WORA), providing no-cost run-times on popular platforms.\r\n\r\nOn 13 November, 2006, Sun released much of Java as free and open source software under the terms of the GNU General Public License (GPL).\r\n\r\nOn 8 May, 2007, Sun finished the process, making all of Java''s core code free and open-source, aside from a small portion of code to which Sun did not hold the copyright.\r\n\r\n<h3>Tools You Will Need</h3>\r\nFor performing the examples discussed in this tutorial, you will need a Pentium 200-MHz computer with a minimum of 64 MB of RAM (128 MB of RAM recommended).\r\n\r\nYou will also need the following softwares âˆ’\r\n\r\nLinux 7.1 or Windows xp/7/8 operating system\r\nJava JDK 8\r\nMicrosoft Notepad or any other text editor\r\nThis tutorial will provide the necessary skills to create GUI, networking, and web applications using Java.\r\n							'),
(32, 'October-02-2017 11:17:35 Monday', 'A tour to Python', 'Python', 'kalim amzad', 'python.jpg', 'Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL).\r\n\r\nPython is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.\r\n\r\nPython is Interpreted: Python is processed at runtime by the interpreter. You do not need to compile your program before executing it. This is similar to PERL and PHP.\r\n\r\n<b>Python is Interactive:</b> You can actually sit at a Python prompt and interact with the interpreter directly to write your programs.\r\n\r\n<b>Python is Object-Oriented:</b> Python supports Object-Oriented style or technique of programming that encapsulates code within objects.\r\n\r\n<b>Python is a Beginner''s Language:</b> Python is a great language for the beginner-level programmers and supports the development of a wide range of applications from simple text processing to WWW browsers to games.\r\n\r\n<h3>History of Python<h3>\r\nPython was developed by Guido van Rossum in the late eighties and early nineties at the National Research Institute for Mathematics and Computer Science in the Netherlands.\r\n\r\nPython is derived from many other languages, including ABC, Modula-3, C, C++, Algol-68, SmallTalk, and Unix shell and other scripting languages.\r\n\r\nPython is copyrighted. Like Perl, Python source code is now available under the GNU General Public License (GPL).\r\n\r\nPython is now maintained by a core development team at the institute, although Guido van Rossum still holds a vital role in directing its progress.\r\n\r\n<h3>Python Features<h3>\r\nPython''s features include:\r\n\r\nEasy-to-learn: Python has few keywords, simple structure, and a clearly defined syntax. This allows the student to pick up the language quickly.\r\n\r\nEasy-to-read: Python code is more clearly defined and visible to the eyes.\r\n\r\nEasy-to-maintain: Python''s source code is fairly easy-to-maintain.\r\n\r\nA broad standard library: Python''s bulk of the library is very portable and cross-platform compatible on UNIX, Windows, and Macintosh.\r\n\r\nInteractive Mode:Python has support for an interactive mode which allows interactive testing and debugging of snippets of code.\r\n\r\nPortable: Python can run on a wide variety of hardware platforms and has the same interface on all platforms.\r\n\r\nExtendable: You can add low-level modules to the Python interpreter. These modules enable programmers to add to or customize their tools to be more efficient.\r\n\r\nDatabases: Python provides interfaces to all major commercial databases.\r\n\r\nGUI Programming: Python supports GUI applications that can be created and ported to many system calls, libraries and windows systems, such as Windows MFC, Macintosh, and the X Window system of Unix.\r\n\r\nScalable: Python provides a better structure and support for large programs than shell scripting.\r\n\r\nApart from the above-mentioned features, Python has a big list of good features, few are listed below:\r\n\r\nIt supports functional and structured programming methods as well as OOP.\r\n\r\nIt can be used as a scripting language or can be compiled to byte-code for building large applications.\r\n\r\nIt provides very high-level dynamic data types and supports dynamic type checking.\r\n\r\nIT supports automatic garbage collection.\r\n\r\nIt can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java.								\r\n							'),
(33, 'October-02-2017 11:26:42 Monday', 'Queue', 'Queue', 'kalim amzad', 'queue.jpg', '								\r\n	Queue is an abstract data structure, somewhat similar to Stacks. Unlike stacks, a queue is open at both its ends. One end is always used to insert data (enqueue) and the other is used to remove data (dequeue). Queue follows First-In-First-Out methodology, i.e., the data item stored first will be accessed first.\r\n\r\nAs in stacks, a queue can also be implemented using Arrays, Linked-lists, Pointers and Structures. For the sake of simplicity, we shall implement queues using one-dimensional array.\r\n\r\n<h3>Basic Operations</h3>\r\nQueue operations may involve initializing or defining the queue, utilizing it, and then completely erasing it from the memory. Here we shall try to understand the basic operations associated with queues âˆ’\r\n\r\nenqueue() âˆ’ add (store) an item to the queue.\r\n\r\ndequeue() âˆ’ remove (access) an item from the queue.\r\n\r\nFew more functions are required to make the above-mentioned queue operation efficient. These are âˆ’\r\n\r\npeek() âˆ’ Gets the element at the front of the queue without removing it.\r\n\r\nisfull() âˆ’ Checks if the queue is full.\r\n\r\nisempty() âˆ’ Checks if the queue is empty.\r\n\r\nIn queue, we always dequeue (or access) data, pointed by front pointer and while enqueing (or storing) data in the queue we take help of rear pointer.\r\n\r\n						'),
(34, 'October-02-2017 11:44:08', 'Merge Sort', 'Sorting', 'kalim amzad', 'mergesort.png', '			\r\nLike QuickSort, Merge Sort is a Divide and Conquer algorithm. It divides input array in two halves, calls itself for the two halves and then merges the two sorted halves. The merge() function is used for merging two halves. The merge(arr, l, m, r) is key process that assumes that arr[l..m] and arr[m+1..r] are sorted and merges the two sorted sub-arrays into one.\r\n\r\nMerge sort is a recursive algorithm that continually splits a list in half. If the list is empty or has one item, it is sorted by definition (the base case). If the list has more than one item, we split the list and recursively invoke a merge sort on both halves. Once the two halves are sorted, the fundamental operation, called a merge, is performed. Merging is the process of taking two smaller sorted lists and combining them together into a single, sorted, new list. Figure 10 shows our familiar example list as it is being split by mergeSort. Figure 11 shows the simple lists, now sorted, as they are merged back together.\r\n\r\n<img alt="../_images/mergesortA.png" src="images/mergesortA.png">	\r\n<img alt="../_images/mergesortB.png" src="images/mergesortB.png">\r\n\r\n<h3>Implementation:</h3>	\r\n\r\n# Python program for implementation of MergeSort\r\n\r\n# Merges two subarrays of arr[].\r\n# First subarray is arr[l..m]\r\n# Second subarray is arr[m+1..r]\r\ndef merge(arr, l, m, r):\r\n	n1 = m - l + 1\r\n	n2 = r- m\r\n\r\n	# create temp arrays\r\n	L = [0] * (n1)\r\n	R = [0] * (n2)\r\n\r\n	# Copy data to temp arrays L[] and R[]\r\n	for i in range(0 , n1):\r\n		L[i] = arr[l + i]\r\n\r\n	for j in range(0 , n2):\r\n		R[j] = arr[m + 1 + j]\r\n\r\n	# Merge the temp arrays back into arr[l..r]\r\n	i = 0	 # Initial index of first subarray\r\n	j = 0	 # Initial index of second subarray\r\n	k = l	 # Initial index of merged subarray\r\n\r\n	while i < n1 and j < n2 :\r\n		if L[i] <= R[j]:\r\n			arr[k] = L[i]\r\n			i += 1\r\n		else:\r\n			arr[k] = R[j]\r\n			j += 1\r\n		k += 1\r\n\r\n	# Copy the remaining elements of L[], if there\r\n	# are any\r\n	while i < n1:\r\n		arr[k] = L[i]\r\n		i += 1\r\n		k += 1\r\n\r\n	# Copy the remaining elements of R[], if there\r\n	# are any\r\n	while j < n2:\r\n		arr[k] = R[j]\r\n		j += 1\r\n		k += 1\r\n\r\n# l is for left index and r is right index of the\r\n# sub-array of arr to be sorted\r\ndef mergeSort(arr,l,r):\r\n	if l < r:\r\n\r\n		# Same as (l+r)/2, but avoids overflow for\r\n		# large l and h\r\n		m = (l+(r-1))/2\r\n\r\n		# Sort first and second halves\r\n		mergeSort(arr, l, m)\r\n		mergeSort(arr, m+1, r)\r\n		merge(arr, l, m, r)\r\n\r\n\r\n# Driver code to test above\r\narr = [54,26,93,17,77,31,44,55,20]\r\nn = len(arr)\r\nprint ("Given array is")\r\nfor i in range(n):\r\n	print ("%d" %arr[i]),\r\n\r\nmergeSort(arr,0,n-1)\r\nprint ("\\n\\nSorted array is")\r\nfor i in range(n):\r\n	print ("%d" %arr[i]),\r\n\r\n# This code is contributed by Mohit Kumra\r\n					\r\n								'),
(35, 'October-02-2017 11:59:39', 'Searching Algorithm', 'Searching', 'kalim amzad', 'search.png', '											\r\nSearching is also a common and well-studied task. This task can be described formally as follows:\r\n\r\nGiven a list of values, a function that compares two values and a desired value, find the position of the desired value in the list.\r\nWe will look at two algorithms that perform this task:\r\n\r\n<b>linear search,</b> which simply checks the values in sequence until the desired value is found\r\n<b>binary search,</b> which requires a sorted input list, and checks for the value in the middle of the list, repeatedly discarding the half of the list which contains values which are definitely either all larger or all smaller than the desired value\r\nThere are numerous other searching techniques. Often they rely on the construction of more complex data structures to facilitate repeated searching. Examples of such structures are hash tables (such as Pythonâ€™s dictionaries) and prefix trees. Inexact searches that find elements similar to the one being searched for are also an important topic.\r\n\r\n<h3>Linear search</h3>\r\nLinear search is the most basic kind of search method. It involves checking each element of the list in turn, until the desired element is found.\r\n\r\nFor example, suppose that we want to find the number 3.8 in the following list:\r\n\r\n<img src="images/blockdiag-f89c0ad9fad40f3a5f55d040b2ea2ee966441749.png" alt="None" width="576" height="120">\r\n\r\nWe start with the first element, and perform a comparison to see if its value is the value that we want. In this case, 1.5 is not equal to 3.8, so we move onto the next element:\r\n\r\n<img src="images/blockdiag-c89fc2a0f6ac9dc31c4733e1ba9612095141c63e.png" alt="None" width="576" height="120">\r\n\r\nWe perform another comparison, and see that 2.7 is also not equal to 3.8, so we move onto the next element:\r\n\r\n<img src="images/blockdiag-711dbad019be24cc93ec7d4eafe67ce96c832ad0.png" alt="None" width="576" height="120">\r\n\r\nWe perform another comparison and determine that we have found the correct element. Now we can end the search and return the position of the element (index 2).\r\n\r\nWe had to use a total of 3 comparisons when searching through this list of 4 elements. How many comparisons we need to perform depends on the total length of the list, but also whether the element we are looking for is near the beginning or near the end of the list. In the worst-case scenario, if our element is the last element of the list, we will have to search through the entire list to find it.\r\n\r\nIf we search the same list many times, assuming that all elements are equally likely to be searched for, we will on average have to search through half of the list each time. The cost (in comparisons) of performing linear search thus scales linearly with the length of the list.\r\n\r\n<h4>Exercise:</h4>\r\n<b>*</b> Write a function which implements linear search. It should take a list and an element as a parameter, and return the position of the element in the list. If the element is not in the list, the function should raise an exception. If the element is in the list multiple times, the function should return the first position.	\r\n\r\n<h3>Binary search</h3>\r\nBinary search is a more efficient search algorithm which relies on the elements in the list being sorted. We apply the same search process to progressively smaller sub-lists of the original list, starting with the whole list and approximately halving the search area every time.\r\n\r\nWe first check the middle element in the list.\r\n\r\nIf it is the value we want, we can stop.\r\nIf it is higher than the value we want, we repeat the search process with the portion of the list before the middle element.\r\nIf it is lower than the value we want, we repeat the search process with the portion of the list after the middle element.\r\nFor example, suppose that we want to find the value 3.8 in the following list of 7 elements:\r\n\r\n<img src="images/blockdiag-4acf3dfa13eb2575d6b0266d1a4807f2f076489b.png" alt="None" width="650" height="120">\r\n\r\nFirst we compare the element in the middle of the list to our value. 7.2 is bigger than 3.8, so we need to check the first half of the list next.\r\n\r\n<img src="images/blockdiag-7bfbf9c517ad62063d12e33e1edc23fc50f11314.png" alt="None" width="650" height="120">\r\n\r\nNow the first half of the list is our new list to search. We compare the element in the middle of this list to our value. 2.7 is smaller than 3.8, so we need to search the second half of this sublist next.\r\n\r\n<img src="images/blockdiag-f464decd28391aa6bbd0c9af610f0564f85b4e95.png" alt="None" width="650" height="120">\r\n\r\nThe second half of the last sub-list is just a single element, which is also the middle element. We compare this element to our value, and it is the element that we want.\r\n\r\nWe have performed 3 comparisons in total when searching this list of 7 items. The number of comparisons we need to perform scales with the size of the list, but much more slowly than for linear search â€“ if we are searching a list of length N, the maximum number of comparisons that we will have to perform is log2N.\r\n\r\n<h4>Exercise:</h4>\r\nWrite a function which implements binary search. You may assume that the input list will be sorted. Hint: this function is often written recursively.\r\n\r\n<h3>Algorithm complexity and Big O notation</h3>\r\nWe commonly express the cost of an algorithm as a function of the number N of elements that the algorithm acts on. The function gives us an estimate of the number of operations we have to perform in order to use the algorithm on N elements â€“ it thus allows us to predict how the number of required operations will increase as N increases. We use a function which is an approximation of the exact function â€“ we simplify it as much as possible, so that only the most important information is preserved.\r\n\r\nFor example, we know that when we use linear search on a list of N elements, on average we will have to search through half of the list before we find our item â€“ so the number of operations we will have to perform is N/2. However, the most important thing is that the algorithm scales linearly â€“ as N increases, the cost of the algorithm increases in proportion to N, not N^2 or N^3. The constant factor of 1/2 is insignificant compared to the very large differences in cost between â€“ for example â€“ N and N^2, so we leave it out when we describe the cost of the algorithm.\r\n\r\nWe thus write the cost of the linear search algorithm as O(N) â€“ we say that the cost is on the order of N, or just order N. We call this notation big O notation, because it uses the capital O symbol (for order).\r\n\r\nWe have dropped the constant factor 1/2. We would also drop any lower-order terms from an expression with multiple terms â€“ for example, O(N^3 + N^2) would be simplified to O(N^3).\r\n\r\nIn the example above we calculated the average cost of the algorithm, which is also known as the expected cost, but it can also be useful to calculate the best case and worst case costs. \r\n									');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `creatorname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `datetime`, `name`, `creatorname`) VALUES
(3, 'September-29-2017 22:35:52 Friday', 'Data Structure', 'Kalim Amzad'),
(4, 'September-29-2017 22:35:56 Friday', 'Algorithm', 'Kalim Amzad'),
(5, 'September-29-2017 22:51:49 Friday', 'Programming', 'Kalim Amzad'),
(6, 'September-29-2017 22:52:06 Friday', 'Database', 'Kalim Amzad'),
(8, 'October-01-2017 00:10:36 Sunday', 'IoT', 'Kalim Amzad'),
(9, 'October-01-2017 00:42:29 Sunday', 'Raspberry pi', 'Kalim Amzad'),
(10, 'October-01-2017 00:44:53 Sunday', 'Arduino', 'Kalim Amzad'),
(11, 'October-01-2017 00:44:59 Sunday', 'Bigdata', 'Kalim Amzad'),
(12, 'October-02-2017 00:49:08 Monday', 'C', 'Kalim'),
(13, 'October-02-2017 00:49:12 Monday', 'C++', 'Kalim'),
(14, 'October-02-2017 00:49:28 Monday', 'JAVA', 'Kalim'),
(15, 'October-02-2017 00:49:37 Monday', 'Python', 'Kalim'),
(16, 'October-02-2017 00:49:50 Monday', 'Matlab', 'Kalim'),
(17, 'October-02-2017 00:49:52 Monday', 'R', 'Kalim'),
(18, 'October-02-2017 00:49:58 Monday', 'PHP', 'Kalim'),
(19, 'October-02-2017 00:50:22 Monday', 'Array', 'Kalim'),
(20, 'October-02-2017 00:50:26 Monday', 'Stack', 'Kalim'),
(21, 'October-02-2017 00:50:31 Monday', 'Queue', 'Kalim'),
(22, 'October-02-2017 00:50:36 Monday', 'Linked List', 'Kalim'),
(23, 'October-02-2017 00:50:40 Monday', 'Heap', 'Kalim'),
(24, 'October-02-2017 00:50:55 Monday', 'Graph', 'Kalim'),
(25, 'October-02-2017 00:51:09 Monday', 'RMQ', 'Kalim'),
(26, 'October-02-2017 00:51:17 Monday', 'Trie', 'Kalim'),
(27, 'October-02-2017 00:51:21 Monday', 'BIT', 'Kalim'),
(28, 'October-02-2017 00:51:39 Monday', 'AVL Tree', 'Kalim'),
(29, 'October-02-2017 00:51:48 Monday', 'Suffix Array', 'Kalim'),
(30, 'October-02-2017 00:52:02 Monday', 'Searching', 'Kalim'),
(31, 'October-02-2017 00:52:07 Monday', 'Sorting', 'Kalim'),
(32, 'October-02-2017 00:52:13 Monday', 'Greedy', 'Kalim'),
(33, 'October-02-2017 00:52:22 Monday', 'Dynamic Programming', 'Kalim'),
(34, 'October-02-2017 00:52:41 Monday', 'Divide & Conqure', 'Kalim'),
(35, 'October-02-2017 00:52:55 Monday', 'BFS & DFS', 'Kalim'),
(36, 'October-02-2017 00:52:58 Monday', 'SSSP', 'Kalim'),
(37, 'October-02-2017 00:53:05 Monday', 'ASSP', 'Kalim'),
(38, 'October-02-2017 00:53:08 Monday', 'MST', 'Kalim'),
(39, 'October-02-2017 00:53:16 Monday', 'Max Flow', 'Kalim'),
(40, 'October-02-2017 00:53:30 Monday', 'MySQL', 'Kalim'),
(41, 'October-02-2017 00:53:38 Monday', 'Data Science', 'Kalim'),
(42, 'October-02-2017 00:53:50 Monday', 'Math', 'Kalim'),
(43, 'October-02-2017 00:53:57 Monday', 'Statistics', 'Kalim'),
(44, 'October-02-2017 00:54:02 Monday', 'English', 'Kalim'),
(45, 'October-02-2017 00:54:09 Monday', 'DLD', 'Kalim');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approvedby` varchar(200) NOT NULL,
  `status` varchar(5) NOT NULL,
  `admin_panel_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approvedby`, `status`, `admin_panel_id`) VALUES
(9, 'October-02-2017 11:02:45', 'Ibrahim', 'nasimcu94@gmail.com', 'Good post. Carry on.', 'kalim amzad', 'OFF', 30),
(10, 'October-02-2017 12:00:20', 'Musa', 'milakyn95@gmail.com', 'Very Helpful post. Continue your good work.', 'kalim amzad', 'ON', 35),
(11, 'October-02-2017 12:01:19', 'Hasan', 'nasimcu87@gmail.com', 'Tnx for your post. We want more post on sorting algorithm.', 'kalim amzad', 'ON', 35),
(12, 'October-02-2017 12:01:53', 'Jamil', 'milakyn95@gmail.com', 'It will be better if you add also implementation', 'kalim amzad', 'ON', 35),
(13, 'October-02-2017 12:04:59', 'Jamal', 'nasimcu87@gmail.com', 'Nice one', 'Pending', 'OFF', 31),
(14, 'October-02-2017 12:05:43', 'Hasan', 'milak.iiuc@gmail.com', 'Please, continue this tutorial.', 'kalim amzad', 'ON', 25),
(15, 'October-02-2017 12:06:04', 'Kamal', 'milakyn95@gmail.com', 'Nice one', 'Pending', 'OFF', 25),
(16, 'October-02-2017 12:07:06', 'Idris', 'milakyn95@gmail.com', 'Please give another post on circular queue', 'kalim amzad', 'ON', 33),
(17, 'October-02-2017 12:07:28', 'Test', 'milak.iiuc@gmail.com', 'this is for testing', 'Pending', 'OFF', 33);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetime`, `username`, `password`, `addedby`) VALUES
(3, 'October-01-2017 12:39:34', 'Kalim', 'amzad', 'Nasim'),
(4, 'October-02-2017 09:49:54', 'kalim amzad', 'kalim', 'Kalim'),
(5, 'October-02-2017 09:50:19', 'Test', 'dummypass', 'Kalim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `admin_panel_id` (`admin_panel_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `foreign key to admin_panel table` FOREIGN KEY (`admin_panel_id`) REFERENCES `admin_panel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
