package com.examples.threads;

public class Program {
    public static void main(String[] args) {
        Runnable r1 = new Task(10, "ping");
        Thread task1 = new Thread(r1);

        Runnable r2 = new Task(10, "Pong");
        Thread task2 = new Thread(r2);

        Runnable r3 = new Task(10, "PENG");
        Thread task3 = new Thread(r3);

        task1.start();
        task2.start();
        task3.start();

    }
}
