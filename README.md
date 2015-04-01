# Upload
This is an upload functionality using dropzone.js library.

Steps to follow : 
1) put dropzone.js, dropzone.css, upload.php, store.php and includes directory containing db.php under your configured host path.
  Explanation:-
  a) upload.php is responsible to provide the area for uploading the files via drag & drop OR selecting a file(on click).
  b) store.php is taking care of saving the path of uploaded files on the server.
  c) db.php is for making the connections to the database.
2) create a directory uploads at the same path where root directory of your host.


How it works : 
Once you drag & drop OR select a file by double clicking the upload area, the file is checked for accepted file types and then uploaded on the uploads directory. At the same time, the upload path is stored in the database in the relative table.
The uploaded files are visible at the bottom of the page.
