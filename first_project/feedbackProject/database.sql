CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
    );
    insert into feedback (name, email, body, date) values 
    ('John Doe', 'john123@gmail.com', 'This is a sample feedback message.', curret_timestamp()),    
    ('Jane Smith', 'jane344@gmail.com', 'I really enjoyed using your service!', curret_timestamp()),
    ('Alice Johnson', 'alice554@gmail.com', 'Great experience, will recommend to others.', curret_timestamp()));


