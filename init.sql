  db:
    image: mysql:5.7
    container_name: appweb-db
    environment:
      MYSQL_ROOT_PASSWORD: rootpassword
      MYSQL_DATABASE: appweb
    ports:
      - "3306:3306"
    volumes:
      - ./init.sql:/docker-entrypoint-initdb.d/init.sql  # Volume pour exécuter init.sql
    networks:
      - app-network
