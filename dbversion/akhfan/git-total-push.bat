@echo off
set schema=%schema.sql
set dat=%data.sql
echo "Exporting all database schema"
mysqldump -u root webmti1 --no-data > %schema%

echo "Exporting all database data"
mysqldump -u root webmti1 --no-create-info > %dat%

echo "Adding schema to git"
git add %schema%

echo "Adding database data to git"
git add %dat%
::Commit
echo "Committing"
git commit -m "Database versioning commit ::automated::"
::Push