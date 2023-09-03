#!/bin/bash

# Đường dẫn tới hai thư mục bạn muốn đồng bộ hóa
source_dir="/var/lib/docker/volumes/snipeit_snipeit_data/_data"
destination_dir="/home/snipeit/source/_data"

# Sử dụng rsync để đồng bộ hóa các thư mục
rsync -avz --delete "$source_dir/" "$destination_dir/"

echo "Đã đồng bộ hóa xong"
