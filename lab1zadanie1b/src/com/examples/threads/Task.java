package com.examples.threads;

public class Task implements Runnable {
    private int repearNumber;
    private String text;

    Task(int repeatNumberArg, String textArg) {
        repearNumber = repeatNumberArg;
        text = textArg;
    }

    @Override
    public void run() {
        for(int i = 0; i < repearNumber; i++) {
            System.out.println(text);
            try {
                Thread.sleep(100);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }
    }
}
