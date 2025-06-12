import { Injectable } from '@nestjs/common';
import { PrismaService } from '../../prisma/prisma.service';
import { CreateBookingInput } from './dto/create-booking.input';
import { Booking } from '@prisma/client';

@Injectable()
export class BookingService {
  constructor(private prisma: PrismaService) {}

  create(data: CreateBookingInput): Promise<Booking> {
    return this.prisma.booking.create({ data });
  }

  cancel(id: number): Promise<boolean> {
    return this.prisma.booking.delete({ where: { id } }).then(() => true);
  }

  checkIn(id: number): Promise<Booking> {
    return this.prisma.booking.update({
      where: { id },
      data: { isCheckedIn: true },
    });
  }

  findByDateRange(startDate: Date, endDate: Date): Promise<Booking[]> {
    return this.prisma.booking.findMany({
      where: {
        startDate: { gte: startDate },
        endDate: { lte: endDate },
      },
    });
  }
}
