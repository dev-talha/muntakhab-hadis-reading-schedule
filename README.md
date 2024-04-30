# Muntakhab Hadis Reading Schedule

This PHP script generates a dynamic schedule for reading Hadith based on specific chapters over a defined period. The script assigns individuals from a pre-defined list to read from designated chapters on each day, allowing for customization of start date, tracking duration, and assigned readers.

## Features

- **Customizable Start Date**: Easily change the start date (`$start_date`) to begin the reading schedule on a desired day.
  
- **Adjustable Tracking Duration**: Modify the number of days (`$days`) to track and schedule Hadith readings according to your preference.

- **Person Assignment**: Readers are assigned from a list of individuals (`$persons`) to read from specific chapters on designated days.

- **Limited Schedule Display**: The script can display a schedule for a limited number of days (e.g., 30 days) using a condition (`$count == 30`).

- **No Database Required**: This is a single-page PHP script that operates without a database, making it simple to deploy and use.

## Benefits

- **Easy Setup and Deployment**: The script requires only a PHP-enabled web server, eliminating the need for complex database setups.

- **Flexibility**: Start date, tracking duration, and assigned readers can be easily customized within the script without database modifications.

- **Low Maintenance**: With no database to manage, maintenance overhead is minimized.

## Usage

1. Clone the repository to your local machine or download the script:
   ```bash
   git clone https://github.com/your-username/muntaqhab-hadis.git
   
2. Modify the script:
-Adjust $start_date to set your desired start date for the reading schedule.
-Update $days to change the number of days to track and schedule Hadith readings.
-Customize the $persons array to include the names of individuals participating in the reading schedule.
-Host the script on a PHP-enabled web server.
-Access the website through a web browser to view the dynamically generated schedule.

## Dependencies
-**Bootstrap v5.0.2**: Included via CDN for styling.
-**Google Fonts (Noto Sans Bengali)**: Included via CDN for font display.

## Contributing
-Contributions are welcome! If you have suggestions, enhancements
