<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
class HRTime\StopWatch extends HRTime\PerformanceCounter {
    /* Methods */
    public getElapsedTicks(): int
    public getElapsedTime(int $unit = ?): float
    public getLastElapsedTicks(): int
    public getLastElapsedTime(int $unit = ?): float
    public isRunning(): bool
    public start(): void
    public stop(): void
    /* Inherited methods */
    public static HRTime\PerformanceCounter::getFrequency(): int
    public static HRTime\PerformanceCounter::getTicks(): int
    public static HRTime\PerformanceCounter::getTicksSince(int $start): int
    }
    ?>
   <!-- 
    <?php
    //public HRTime\StopWatch::getElapsedTime(int $unit = ?): float
    ?>-->
</body>
</html>