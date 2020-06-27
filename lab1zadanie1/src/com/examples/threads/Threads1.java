package com.examples.threads;


import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.concurrent.ThreadLocalRandom;

public class Threads1 extends Thread {
    public String text;

    private Threads1() throws IOException {
        readArgs();
    }

    public void readArgs() throws IOException {
        System.out.println("Please type text to test threads...");
        BufferedReader reader =
                new BufferedReader(new InputStreamReader(System.in));
        this.text = reader.readLine();

    }

    public void run() {
        for(int i = 0; i < 10; i++) {
            System.out.println(text);
            try {
                Threads1.sleep(ThreadLocalRandom.current().nextInt(100, 999 + 1));
            } catch (InterruptedException e) {
                e.printStackTrace();
            }

        }

    }

    public static void main(String args[]) throws IOException {
        (new Threads1()).start();
    }

}