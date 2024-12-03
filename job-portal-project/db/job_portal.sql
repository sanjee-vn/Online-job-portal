-- Create the database and table
CREATE DATABASE job_portal;
USE job_portal;

CREATE TABLE jobs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(255) NOT NULL,
    salary VARCHAR(255) NOT NULL
);

-- Insert sample data
INSERT INTO jobs (title, company, location, description, category, salary) VALUES
('Software Engineer', 'Tech Corp', 'New York, NY', 'Develop software applications.', 'IT', '$100,000'),
('Graphic Designer', 'Design Studio', 'Los Angeles, CA', 'Create visual content.', 'Design', '$60,000'),
('Data Analyst', 'Data Insights', 'San Francisco, CA', 'Analyze data to gain insights.', 'Analytics', '$80,000');
