
#!/bin/bash


source_dir="/home/snipeit/source/_data"


destination_dir="/var/lib/docker/volumes/snipeit_snipeit_data/_data"


cp -r "$source_dir"/* "$destination_dir/"

echo "Copy done"
