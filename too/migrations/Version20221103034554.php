<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103034554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE actividad_economica_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE agenda_contacto_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE catalogo_asociacion_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE codigo_telefono_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE detalle_aportacion_cuenta_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE genero_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lista_asociacion_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lista_beneficiario_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lista_referencia_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lista_region_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE lista_subregion_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pais_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE persona_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE profesion_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE rubro_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_actividad_economica_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_parentezco_beneficiario_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_region_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_telefono_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE actividad_economica (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE agenda_contacto (id INT NOT NULL, numero_contacto VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE catalogo_asociacion (id INT NOT NULL, nombre_asociacion VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE codigo_telefono (id INT NOT NULL, codigo_telefono VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE detalle_aportacion_cuenta (id INT NOT NULL, monto_detalle_aportacion INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE genero (id INT NOT NULL, tipo_genero VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE lista_asociacion (id INT NOT NULL, nombre_asociacion VARCHAR(20) NOT NULL, estado_asociacion BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE lista_beneficiario (id INT NOT NULL, nombre_beneficiario VARCHAR(50) NOT NULL, nom_beneficiario VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE lista_referencia (id INT NOT NULL, nombre_referencia VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE lista_region (id INT NOT NULL, nombre_region VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE lista_subregion (id INT NOT NULL, nombre_subregion VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pais (id INT NOT NULL, nombre_pais VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE persona (id INT NOT NULL, primer_nombre VARCHAR(12) NOT NULL, segundo_nombre VARCHAR(12) NOT NULL, tercer_nombre VARCHAR(12) NOT NULL, primer_apellido VARCHAR(12) NOT NULL, segundo_apellido VARCHAR(12) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE profesion (id INT NOT NULL, nombre_profesion VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE rubro (id INT NOT NULL, nombre_rubro VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_actividad_economica (id INT NOT NULL, nombre_tipo_actividad VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_parentezco_beneficiario (id INT NOT NULL, tipo_parentezco_beneficiario VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_region (id INT NOT NULL, nombre_tipo_region VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_telefono (id INT NOT NULL, nombre_tipo_telefono VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE actividad_economica_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE agenda_contacto_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE catalogo_asociacion_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE codigo_telefono_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE detalle_aportacion_cuenta_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE genero_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lista_asociacion_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lista_beneficiario_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lista_referencia_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lista_region_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE lista_subregion_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pais_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE persona_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE profesion_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE rubro_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_actividad_economica_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_parentezco_beneficiario_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_region_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_telefono_id_seq CASCADE');
        $this->addSql('DROP TABLE actividad_economica');
        $this->addSql('DROP TABLE agenda_contacto');
        $this->addSql('DROP TABLE catalogo_asociacion');
        $this->addSql('DROP TABLE codigo_telefono');
        $this->addSql('DROP TABLE detalle_aportacion_cuenta');
        $this->addSql('DROP TABLE genero');
        $this->addSql('DROP TABLE lista_asociacion');
        $this->addSql('DROP TABLE lista_beneficiario');
        $this->addSql('DROP TABLE lista_referencia');
        $this->addSql('DROP TABLE lista_region');
        $this->addSql('DROP TABLE lista_subregion');
        $this->addSql('DROP TABLE pais');
        $this->addSql('DROP TABLE persona');
        $this->addSql('DROP TABLE profesion');
        $this->addSql('DROP TABLE rubro');
        $this->addSql('DROP TABLE tipo_actividad_economica');
        $this->addSql('DROP TABLE tipo_parentezco_beneficiario');
        $this->addSql('DROP TABLE tipo_region');
        $this->addSql('DROP TABLE tipo_telefono');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
