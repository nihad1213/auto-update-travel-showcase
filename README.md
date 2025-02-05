# Auto Update Travel Showcase

This project automatically generates a list of images and their corresponding descriptions from a specified directory. It is built using PHP and HTML.

## Project Structure

- `index.php`: The main file that generates the HTML content.
- `images/`: Directory containing image files and their corresponding text files.
- `styles/simple.css`: CSS file for styling the HTML content.

## How It Works

1. The `index.php` file scans the `images/` directory for image files with extensions `jpg`, `jpeg`, and `png`.
2. For each image file, it looks for a corresponding text file with the same name (but with a `.txt` extension).
3. The first line of the text file is used as the title, and the remaining lines are used as the content.
4. The images and their descriptions are then displayed on the webpage.

## Usage

1. Place your image files in the `images/` directory.
2. Create a text file for each image with the same name as the image file (but with a `.txt` extension).
3. The first line of the text file will be used as the title, and the remaining lines will be used as the content.
4. Open `index.php` in a web browser to see the automatically generated list of images and their descriptions.