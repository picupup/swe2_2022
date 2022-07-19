for i in $(echo "show tables" | mysql ); do
  echo -e "TABLE = > $i \n"
  echo "describe $i" | mysql
  echo
done
