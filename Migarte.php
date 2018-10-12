<?php
/**
 * Created by PhpStorm.
 * User: vovichua
 * Date: 12.10.18
 * Time: 17:52
 */

class Migarte extends Model
{
    public function migrate()
    {
        $sql = 'CREATE TABLE posts (
                      id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      title VARCHAR(25) DEFAULT NULL,
                      short VARCHAR(50) DEFAULT NULL,
                      description VARCHAR (255) DEFAULT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;';

        $this->connection->prepare($sql);
        $this->connection->execute();

        $sql = 'insert into posts(
            id,
            title,
            short,
            description
            ) VALUES (
            "Нам нужен 12-й игрок",
            "Главный тренер сборной Украины Андрей Шевченко рассказал о подготовке к матчу против Чехии",
            "Перед открытой тренировкой сборной Украины главный тренер команды Андрей Шевченко ответил на вопросы журналистов.",
            )';

        $this->connection->prepare($sql);
        $this->connection->execute();

        $sql = 'CREATE TABLE articles (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(25) DEFAULT NULL,
  text VARCHAR (255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;';

        $this->connection->prepare($sql);
        $this->connection->execute();

        $sql = 'insert into posts(
            id,
            title,
            text,
            ) VALUES (
            "игрок недели в ЛЧ",
            "Стали известны имена лучших футболистов первого тура Лиги чемпионов",
            "Официальный сайт УЕФА подводит итоги первого тура группового этапа Лиги чемпионов и объявил имена футболистов, которые будут бороться за звание лучшего игрока тура.",
            )';

        $this->connection->prepare($sql);
        $this->connection->execute();

    }

}