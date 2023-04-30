pipeline {
    agent any
    environment {
        PATH = "${PATH}:/usr/local/bin"
    }
    stages {
        stage("Build-database"){
            steps{
                sh '''
                    docker build -t redlock-db-2.0 ./redlock-db-2.0
                '''
            }
        }
        stage("Build-web"){
            steps{
                sh '''
                    docker build -t redlock-web-2.0 ./redlock-web-2.0
                '''
            }
        }
    }
}