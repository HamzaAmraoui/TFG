# Automatización del despliegue de una aplicación PHP + MySQL con Docker, CI/CD, Kubernetes y Apache

Este repositorio contiene el proyecto de un sistema automatizado de despliegue y orquestación de una aplicación web PHP con base de datos MySQL. La solución está basada en contenedores Docker, flujos de integración y entrega continua (CI/CD) mediante GitHub Actions, y se despliega en dos entornos diferenciados:

- **Desarrollo**: Kubernetes local con Rancher Desktop.
- **Producción**: AWS EC2 con servidor Apache y Docker.

## 🧱 Tecnologías utilizadas

- **Lenguaje backend:** PHP 8
- **Base de datos:** MySQL 8
- **Servidor web:** Apache 2.4
- **Contenedores:** Docker, Docker Compose
- **Orquestación:** Kubernetes (Rancher Desktop)
- **Automatización CI/CD:** GitHub Actions
- **Entorno de producción:** AWS (EC2)
- **Sistema operativo base:** Linux (Ubuntu)

## 📁 Estructura del repositorio

.
├── .github/workflows/ # Pipelines CI/CD
├── app/ # Código fuente PHP
├── db/ # Configuración y volúmenes de MySQL
├── k8s/ # Manifiestos para Kubernetes
├── docker-compose.yml # Despliegue local con Docker Compose
├── Dockerfile # Imagen personalizada de la aplicación
└── README.md # Este documento

## 🔄 Funcionamiento del CI/CD

El flujo CI/CD está automatizado mediante GitHub Actions y funciona así:

Cada push a la rama main o dev activa el pipeline.

Rama dev:
Construcción de contenedores

Test (opcional)

Simulación de despliegue en entorno de desarrollo (Kubernetes local)

Rama main:
Construcción de contenedores

Test (opcional)

Despliegue remoto en AWS vía SSH

## 🚀 Despliegue

### Entorno de desarrollo (Kubernetes - Rancher Desktop)

1. Instalar Rancher Desktop y kubectl.
2. Ejecutar los manifiestos Kubernetes:

```bash
kubectl apply -f k8s/
Accede a la app en http://localhost:30080.

Entorno de producción (Apache + Docker en AWS)
Iniciar una instancia EC2 con Ubuntu.

CI/CD con GitHub Actions
Cada push a main o dev activa el pipeline de CI/CD:

Build de imágenes Docker

Test (si aplica)

Despliegue automático según rama:

dev → Kubernetes local (simulado)

main → Despliegue remoto a AWS vía SSH

🛠️ Requisitos previos
Docker y Docker Compose

GitHub Actions configurado

AWS CLI y claves SSH configuradas

Rancher Desktop instalado (para desarrollo)

✍️ Autor
Trabajo de Fin de Grado — Hamza Amraoui El Khalifi
Junio de 2025
